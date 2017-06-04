<?php


class ACTView extends View{
	
	public function render( $action="index"){
		if($action == "index"){
    		$this->index(); return ;
    	}
    	else if($action == "add"){
    		$this->add(); return ;
    	}
	}
	
	  public function index( ){
    	
        $pages[] = APP_PATH."application/views/Index/header.php";
        $pages[] = APP_PATH."application/views/Index/index.php";
        $pages[] = APP_PATH."application/views/Index/foot.php";
        $pages[] = APP_PATH."application/views/Index/footer.php";
    	
    	foreach( $pages as $page) $this->page($page);
    }
 
 	public function add( ){
    	
    	$pages[] = APP_PATH."/application/views/Index/header.php";
    	$pages[] = APP_PATH."/application/views/Index/add.php";
    	$pages[] = APP_PATH."/application/views/Index/footer.php";
    	
    	foreach( $pages as $page) $this->page($page);
    }
}

?>