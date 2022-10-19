<?php

trait Controller
{
    public $view;
    public $model;

    function __construct()
    {
        $this->view = new View();
        $this->model = $this->loadModel($_REQUEST["controller"]);
        $controllerName=$_REQUEST["controller"]."Controller";
        $action = "";
        if (isset($_REQUEST["action"])) {


            $action = $_REQUEST["action"];
            
        }

        if (method_exists($controllerName, $action)) {
            
            

            call_user_func([$controllerName, $action], $_REQUEST);
        } else {
            $this->error("Invalid user action");
        }
    }

    function loadModel($model)
    {
        $url = MODELS . '/' . $model . 'Model.php';
          
        if (file_exists($url)) {
            require_once $url;

            $modelName = $model . 'Model';
            
            
            return new $modelName();
        }
    }

    function error($errorMsg)
    {
       return $errorMsg ;
    }
}