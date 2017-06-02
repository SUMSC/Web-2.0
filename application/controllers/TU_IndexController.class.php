<?php 

class TU_IndexController extends Controller{

    function index(){     

        $this->assign('title', '首页');
        $this->assign('content', 'php MVC');
        $this->render("tu_index");
    }
    
    public function test(){
    
        $this->render("test");
    }

}

