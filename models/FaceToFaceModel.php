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
           "SELECT m.first_name,m.last_name,m.gender,m.birth_date,m.phone_number,m.assembler_role,m.email,
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

    function create($member):array{

            list($nameEmail,$extensionEmail) = explode("@",  $member["email"]);

            $infoCreation = $this->database->connect()->
            prepare("INSERT INTO members (first_name, last_name, email, gender,birth_date, phone_number,assembler_role)
            VALUES
            (".$member["first_name"].",". $member["last_name"].",".$nameEmail.`@`.$extensionEmail.",". $member["gender"].",". $member["birth_date"].",". $member["phone_number"].",".$member["assembler_role"].");");
    
    
            try {
                $infoCreation->execute();
            } catch (PDOException $error) {
               echo $error;
                return [false, $error];
            }
        }

        function delete($member){


            $deleteInfo =$this->database->connect()->
            prepare("DELETE FROM members WHERE id=$member");
    
            try{
                $deleteInfo->execute();
                return [true];
            }catch(PDOException $error){
                return [false,$error];
    
            }
    
        }
    
    }

    

    
  


