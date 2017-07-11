<?php
	class PfRepairmenView extends View
	{
		
		public function render($action="index"){
    	    if($action == "index")
    	    {
    	        $this->index(); return ;
    	    }
    	    else if($action == "backend")
    	    {	
    	     	$this->backend(); return ;
    	    }
    	    else
    	    {
    	        $this->error(); return ;
    	    }
    	}

    	public function index(){
            $pages[] = APP_PATH."application/views/Index/header.php";
            $pages[] = APP_PATH."application/views/PF_Repairmen/title.php";
            $pages[] = APP_PATH."application/views/PF_Repairmen/repairmen.php";
            foreach($pages as $page){ $this->page($page);}
	    }

        public function backend(){
            $pages[] = APP_PATH."application/views/Index/header.php";
            $pages[] = APP_PATH."application/views/PF_Repairmen/backend.php";
            foreach($pages as $page){ $this->page($page);}

        }
	}