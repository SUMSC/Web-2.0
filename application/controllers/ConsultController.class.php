<?php 

class ConsultController extends Controller{

    function consult(){

        $this->assign('title', '首页');
        $this->assign('content', 'php MVC');
        $this->render("consult");
    }


    public function add()
    {
   //     $this->render("author");
    }
}

