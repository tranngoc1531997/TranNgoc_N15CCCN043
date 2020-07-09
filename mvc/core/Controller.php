<?php
class Controller{

    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($view, $data=[]){
        require_once "./mvc/views/".$view.".php";
    }
    public function callClass($class){
        require_once "./mvc/core/$class.php";
        return new $class;
    }
}
?>