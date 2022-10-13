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

    function delete($requestInfo){

        $action =$requestInfo["action"];
        $deleteMember = null ;
        if(isset($request["id"])){
            $deleteMember =$this->model->delete($request["id"]);
            header("Location:index.php?controller=FaceToFace&action=getAll");
        }else{ 
            echo "ha ocurrido un error";
            header("Location:index.php?controller=FaceToFace&action=getAll");

        }
    }
}