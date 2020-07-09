<?php

class Home extends Controller{

    public function __construct()
    {
        if(isset($_SESSION['isLogin'])){
            $this->UserName = $_SESSION['isLogin'];
        }
        else{
            header('location: ./?ctrl=user');
        }
    }
    public function Default(){
        $page = 'dashboard';
        $view = $this->view("master-view", ['title' => "Trang chủ",'page'=>$page]);
    }
    
}
?>