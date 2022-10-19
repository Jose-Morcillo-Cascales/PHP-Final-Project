<?php

class Router {

    function __construct(){
        session_start();

        
        if(isset($_GET['controller'])) {
            
            
            $controller= $_GET['controller']."Controller";
            $controllerRoot = CONTROLLERS. $controller.".php";
                

            if(($controller==='LoginController') && (!isset($_SESSION['user']))){

                if(file_exists( $controllerRoot)) {
                    
                    require_once $controllerRoot;
                   
                     new $controller();
                } else {
                    
                    echo "error";
                }

            }else if($_SESSION['user'] ){
                if(file_exists( $controllerRoot)) {
                    
                    require_once $controllerRoot;
                   
                     new $controller();
                     
                } else {
                    
                    echo "error";
                }
            }
           
        } else {
            require_once VIEWS ."main/main.php";
        }
    }

   
}