<?php

class LoginController  {

    use Controller;

    function login($request){
        
        $login=null;

        if(isset($request)){

           $login = $this->model->login($request);
           if(!isset($_SESSION['user'])){
            $this->view->render("main/login"); 
           }else{
           
           
            $this->view->render("main/main");
            return $login;
           }
        }
       
    }

    function logout(){
        
        session_destroy();
        $this->view->render("main/login");

    }
}