<?php
	class PfConsultView extends View
	{
		
		public function render($action="submit"){
			if($action == "submit")
    	    {	
    	     	$this->submit(); return ;
    	    }
    	    else
    	    {
    	        $this->error(); return ;
    	    }
    	}
	    public function submit(){
	    	$pages[] = APP_PATH."application/views/PF_Consult/form.php";
		    $pages[] = APP_PATH."application/views/Index/foot.php";
        	$pages[] = APP_PATH."application/views/Index/footer.php";
	        foreach($pages as $page){ $this->page($page);}
	    }
	}