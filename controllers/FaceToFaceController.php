<?php

class FaceToFaceController {

    use Controller;

    function getAll(){

        $faceToFaceInfo = $this->model->getAll();
        if(isset($faceToFaceInfo)){
            $this->view->data = $faceToFaceInfo;
            $this->view->render("faceToface/faceTofaceList");
        }
    }

    function getOne($requestInfo){

        $member=null;
        if (isset($requestInfo["id"])){
            $member = $this->model->getOne($requestInfo["id"]);
        }else{
            print_r($requestInfo);
        }

        $this->view->action = $requestInfo["action"];
        $this->view->data = $member;
        $this->view->render("faceToFace/faceToFaceForm");
    }

    function create($requestArray){

        if(sizeof($_POST)>0){
            $member = $this->model->create($requestArray);

            if ($member[0]) {
                header("Location:index.php?controller=FaceToFace&action=getAll");

            } else {
                echo $member[1];
            }
        }else {
            $this->view->action = $requestArray["action"];
            $this->view->render("faceToFace/faceToFaceForm");
        }
           
    }

    function update($requestArray){
        
        if(sizeof($_POST)>0){
            $member = $this->model->update($requestArray);

            if ($member[0]) {
                header("Location:index.php?controller=FaceToFace&action=getAll");

            } else {
                echo $member[1];
            }
        }else {
            $this->view->action = $requestArray["action"];
            $this->view->render("faceToFace/faceToFaceForm");
        }
    }

    function delete($requestInfo){
            
        $deleteMember = null ;
        if(isset($requestInfo["id"])){
            $deleteMember =$this->model->delete($requestInfo["id"]);
            header("Location:index.php?controller=FaceToFace&action=getAll");
        }else{ 
            echo "ha ocurrido un error";
            header("Location:index.php?controller=FaceToFace&action=getAll");

        }
    }
}