<?php 

class GT_IndexController extends Controller{

   
    public function index()
    {
    	
        $this->_view->render("index");
    }

    public function book()
    {
    	
    	$keyword =array("type"=> __FUNCTION__);

    	$data = (new GT_IndexModel)->select($keyword);

    	
    	//echo gettype($data);
    	
    	$this -> assign("data",$data);

        $this->_view->render("GTIndex");
    }
    
    public function web()
    {
    	$keyword =array("type"=> __FUNCTION__);

    	$data = (new GT_IndexModel)->select($keyword);

    	
    	//echo gettype($data);
    	
    	$this -> assign("data",$data);

        $this->_view->render("GTIndex");
    }
    public function software()
    {

    	$keyword =array("type"=> __FUNCTION__);

    	$data = (new GT_IndexModel)->select($keyword);

    	
    	//echo gettype($data);
    	
    	$this -> assign("data",$data);

        $this->_view->render("GTIndex");

    }
    public function update()
    {
    	
    	$keyword =array("type"=> __FUNCTION__);

    	$data = (new GT_IndexModel)->select($keyword);

    	
    	//echo gettype($data);
    	
    	$this -> assign("data",$data);

        $this->_view->render("GTIndex");

    }
}

