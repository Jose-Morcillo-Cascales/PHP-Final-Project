<?php




Class FaceToFaceModel extends Model{

    function getAll():array{
        $info = $this->database->connect()->
        prepare(
        "SELECT f.id, f.city,m.first_name,m.last_name,m.gender,m.birth_date,m.phone_number,m.assembler_role
        FROM face_to_face_work f 
        JOIN  members m
        ON f.id=m.id;");

        try {

            $info->execute();
            $faceToFaceInfo = $info ->fetchAll();
            return $faceToFaceInfo;

        } catch(PDOException $error){
            return $error;
        }
    }

    function getOne($id):array{
        $oneInfo = $this->database->connect()->
        prepare(
           "SELECT m.id, m.first_name,m.last_name,m.gender,m.birth_date,m.phone_number,m.assembler_role,m.email,
           f.city,f.street_address,f.from_date,f.to_date,
           u.user_password
           FROM  members m
           LEFT JOIN face_to_face_work f
           ON m.id = f.id
           JOIN users u
           ON u.id = m.id
           WHERE m.id = $id;"
        );

        try {

            $oneInfo->execute();
            $oneFaceToFaceInfo = $oneInfo ->fetch();
            return $oneFaceToFaceInfo ;

        } catch(PDOException $error){
            return $error;
        }
    }

    function create($member){
        
            //CREATION MEMBER

            list($nameEmail,$extensionEmail) = explode("@",  $member["email"]);
            $infoCreation = $this->database->connect()->
             prepare( "INSERT INTO members (first_name, last_name, email, gender,birth_date, phone_number,assembler_role)
                VALUES
                ("."'".$member["first_name"]."',"."'". $member["last_name"]."',"."'".$nameEmail."@".$extensionEmail."',"."'". $member["gender"]."',". $member["birth_date"].",". $member["phone_number"].","."'".$member["assembler_role"]."');");
            
             //FIND ID NEW MEMBER
             $NewMember=$this->database->connect()->
             prepare("SELECT MAX(members.id) FROM members ");
                
            try {
                $infoCreation->execute();
               
                $NewMember->execute();
                $IdNewMember=$NewMember->fetch();

                //CREATION FACE_TO_FACE
                
 
                 $NewFaceToFace=$this->database->connect()->
                 prepare("INSERT INTO face_to_face_work(id,city,street_address,from_date,to_date) 
                 VALUES
                 ("."'".$IdNewMember[0]."',"."'". $member["city"]."',"."'". $member["street_address"]."',". $member["from_date"].","."".$member["to_date"].");");

                $NewFaceToFace->execute();

                //CREATION PASSWORD

                $newPassword=$this->database->connect()->
                prepare("INSERT INTO users(id,user_password)
                VALUES
                ("."".$IdNewMember[0].",". "". $member["user_password"].")");
                
                $newPassword->execute();

                return [true];
            }
            catch (PDOException $error) {
                return [false, $error];
            }
        }

        function update($member){
            // EDIT MEMBER
            $first_name=$member["first_name"];
            $last_name=$member["last_name"];
            $email =$member["email"];
            $gender = $member["gender"];
            $birth_date = $member["birth_date"];
            $phone_number =$member["phone_number"];
            $assembler_role= $member["assembler_role"];
            $id=$member["id"];

            $updateMemberQuery=$this->database->connect()->
            prepare("UPDATE members SET 
            first_name =' $first_name', last_name = '$last_name', email='$email', gender ='$gender',birth_date=$birth_date, phone_number=$phone_number,assembler_role='$assembler_role'
            WHERE id =$id;");
            //EDIT FACE TO FACE 

            $city=$member["city"];
            $street_address=$member["street_address"];
            $from_date=$member["from_date"];
            $to_date=$member["to_date"];

            $updateFaceToFaceQuery=$this->database->connect()->
            prepare("UPDATE face_to_face_work SET 
            city ='$city', street_address = '$street_address',from_date=$from_date,to_date=$to_date
            WHERE id =$id;");

            //EDIT USERS 
            $user_password=$member["user_password"];
            $updateUserQuery=$this->database->connect()->
            prepare("UPDATE users SET user_password =' $user_password' 
            WHERE id = $id;");

            try{
                $updateMemberQuery->execute();
                $updateFaceToFaceQuery->execute();
                $updateUserQuery->execute();

                return [true];

            }catch(PDOException $error){
                return [false, $error];
            }
        }

        function delete($id){


            $deleteFaceToFace =$this->database->connect()->
            prepare("DELETE FROM face_to_face_work WHERE id=$id");
            
            $deletePassword =$this->database->connect()->
            prepare("DELETE FROM users WHERE id=$id");

            $deleteMember =$this->database->connect()->
            prepare("DELETE FROM members WHERE id=$id");


            try{
                $deleteFaceToFace->execute();
                $deletePassword->execute();
                $deleteMember->execute();
              
                
            }catch(PDOException $error){
                return [false,$error];
    
            }
    
        }
    
    }



   

    

    
  


