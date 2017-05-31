<?php 

class GT_IndexController extends Controller{

   
    public function index()
    {
    	$data = (new GT_IndexModel)->select("gtBook");
        // book.php 调用方式 $vars["data"];
        $this->assign("data", $data);

        $this->render("index");
    }
}

