<?php 

class PfFaqController extends Controller{

    function index(){


    	$this->assign('title', '首页');
        $this->assign('content', 'php MVC');
        $this->render("index");
       // $this->render("submit");
        }

}
