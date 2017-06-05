<?php

class TU_IndexView extends View{

    public function render($action="index"){
        if($action == "index")
        {
            $this->index(); return ;
        }
        else if($action == "test")
        {
	        $this->test(); return ;
        }
        else
        {
            $this->index(); return ;
        }
    }
    
    public function index(){
        require(APP_PATH."application/views/TU_Index/index.php");
    }
    
    public function test(){
	$pages[] = APP_PATH."application/views/TU_Index/test.php";
	$pages[] = APP_PATH."application/views/TU_Index/link.php";
        foreach($pages as $page){
		require($page);
	}
    }
}
