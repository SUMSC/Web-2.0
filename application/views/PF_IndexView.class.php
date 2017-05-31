<?php
	class PF_IndexView extends View
	{
		
		public function render($action="index"){
    	    if($action == "index")
    	    {
    	        $this->index(); return ;
    	    }
    	    else if($action == "faq")
    	    {
    	    	echo "This is 1";
    	    	$this->faq(); return ;
    	    }
    	    else
    	    {
    	        $this->error(); return ;
    	    }
    	}

    	public function index(){

	        //$pages[] = APP_PATH."application/views/Index/header.php";
        	$pages[] = APP_PATH."application/views/PF_Index/title.php";
        	//$pages[] = APP_PATH."application/views/Index/foot.php";
        	//$pages[] = APP_PATH."application/views/Index/footer.php";
	        foreach($pages as $page){ $this->page($page); }
	        echo "<h1>Now it enter faq</h1>";
			$faqs = (new PF_IndexModel)->faqSelect();
				echo $faqs;
	        foreach($faqs as $faq){
				echo $faq;
				page(APP_PATH."application/views/PF_Index/faq.php");
	    	}
	    }
	     function faq(){
			$faqs = (new PF_IndexModel)->faqSelect();
				echo $faqs;
	        foreach($faqs as $faq){
				echo $faq;
				page(APP_PATH."application/views/PF_Index/faq.php");
	        }
	    }	 
	}