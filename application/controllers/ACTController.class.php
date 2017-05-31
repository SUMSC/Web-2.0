<?php


class ACTController extends Controller{
	
	
	public function index( $params ){
		
 
        $this->assign('title', '首页');
 
        $this->assign('content',‘php MVC’);
 
        $this->_view->render("index");
    }
	
	
	  public function add(  ){
 
             $this->render("author");
    }
 
}

?>
 