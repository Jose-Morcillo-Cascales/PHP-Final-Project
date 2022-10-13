<?php

class RemoteWorkModel extends Model {

    function getAll():array{
        $info = $this->database->connect()->
        prepare(
        "SELECT r.id, r.city,m.first_name,m.last_name,m.gender,m.birth_date,m.phone_number,m.assembler_role
        FROM remote_work r 
        JOIN  members m
        ON r.id=m.id;");

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
           r.city,r.street_address,r.from_date,r.to_date,
           u.user_password
           FROM  members m
           LEFT JOIN remote_work r
           ON m.id = r.id
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
