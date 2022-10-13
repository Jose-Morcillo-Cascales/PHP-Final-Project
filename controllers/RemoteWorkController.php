<?php

class RemoteWorkController {
     
    use Controller;

    function getAll(){

        $remoteInfo = $this->model->getAll();

        if(isset($remoteInfo)){
            $this->view->data = $remoteInfo;
            $this->view->render("remote/remoteWorkList");
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
        $this->view->render("remote/remoteWorkForm");
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