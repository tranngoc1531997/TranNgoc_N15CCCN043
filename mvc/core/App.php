<?php
class App{

    protected $controller="Home";
    protected $action="Default";
    protected $params;

    function __construct(){
        // Controller
        if(isset($_GET['ctrl'])){
            if( file_exists("./mvc/controllers/".$_GET['ctrl'].".php") ){
                $this->controller = $_GET['ctrl'];
            }
        }
        require_once "./mvc/controllers/". $this->controller .".php";
        $this->controller = new $this->controller;
        // Action
        if(isset($_GET['act'])){
            if( method_exists( $this->controller ,$_GET['act']) ){
                $this->action = $_GET['act'];
            }
        }
        // Param
        if(isset($_GET['param'])){
            $this->params = $_GET['param'];
        }
        call_user_func([$this->controller,$this->action], $this->params);
    }
}
?>