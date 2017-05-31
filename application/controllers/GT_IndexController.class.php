<?php 

class GT_IndexController extends Controller{

   
    public function index()
    {
    	$data = (new GT_IndexModel)->select("gtBook");
    	
        $this->render("index");
    }
}

