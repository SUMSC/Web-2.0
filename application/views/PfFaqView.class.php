<?php
	class PfFaqView extends View
	{
		
		public function render($action="index"){
    	    if($action == "index")
    	    {
    	        $this->index(); return ;
    	    }
    	    else if($action == "submit")
    	    {	
    	     	$this->submit(); return ;
    	    }
    	    else
    	    {
    	        $this->error(); return ;
    	    }
    	}

    	public function index(){
	        $pages[] = APP_PATH."application/views/Index/header.php";
        	$pages[] = APP_PATH."application/views/PF_Index/title.php";
	        foreach($pages as $page){ $this->page($page); }
			$faqs = (new PfFaqModel)->faqSelect();
			echo "<h2 align='center'>在报修之前，建议您先浏览以下常见问题：</h2>";
	        foreach($faqs as $faq){
				echo "<hr>";
				echo "<p>A:".$faq['ask']."</p>";
				echo "<p>Q:".$faq['question']."</p>";
			}
        	while (array_shift($pages)) {}
        	$pages[] = APP_PATH."application/views/PF_Index/form.php";
		    $pages[] = APP_PATH."application/views/Index/foot.php";
        	$pages[] = APP_PATH."application/views/Index/footer.php";
	        foreach($pages as $page){ $this->page($page);}

	    }

	}