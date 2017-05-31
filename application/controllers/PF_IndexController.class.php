<?php 

class PF_IndexController extends Controller{

    function consult(){


    	$this->assign('title', '首页');
        $this->assign('content', 'php MVC');
        $this->render("Index");
        $this->render("faq");
    }


    public function add()
    {

        $this->render("author");
    }
}
