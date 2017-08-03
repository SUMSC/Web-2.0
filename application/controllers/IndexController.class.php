<?php 

class IndexController extends Controller{

    function index(){

        $this->assign('title', '首页');
        $this->assign('content', 'php MVC');
        $this->render("index");
    }


    public function add()
    {
        $this->render("author");
    }
}

