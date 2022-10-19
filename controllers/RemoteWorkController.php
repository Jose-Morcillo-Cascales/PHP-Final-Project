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

    function create($requestArray){

        if(sizeof($_POST)>0){
            $member = $this->model->create($requestArray);

            if ($member[0]) {
                header("Location:index.php?controller=RemoteWork&action=getAll");

            } else {
                echo $member[1];
            }
        }else {
            $this->view->action = $requestArray["action"];
            $this->view->render("remote/remoteWorkForm");
        }
           
    }

    function update($requestArray){
        
        if(sizeof($_POST)>0){
            $member = $this->model->update($requestArray);

            if ($member[0]) {
                header("Location:index.php?controller=RemoteWork&action=getAll");

            } else {
                echo $member[1];
            }
        }else {
            $this->view->action = $requestArray["action"];
            $this->view->render("faceToFace/remoteWorkForm");
        }
    }

    function delete($requestInfo){
            
        $deleteMember = null ;
        if(isset($requestInfo["id"])){
            $deleteMember =$this->model->delete($requestInfo["id"]);
            header("Location:index.php?controller=RemoteWork&action=getAll");
        }else{ 
            echo "ha ocurrido un error";
            header("Location:index.php?controller=RemoteWork&action=getAll");

        }
    }

}