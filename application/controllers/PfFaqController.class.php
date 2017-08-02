<?php 

class PfFaqController extends Controller{

    function index(){


    	$this->assign('title', '首页');
        $this->assign('content', 'php MVC');
        $this->render("index");
        }

    function addFaq(){
    	$this->render("addFaq");
    }

    function newFaq(){
		$data = array('question' => $_POST['question'], 'answer' => $_POST['answer']);
		(new PfFaqModel) -> faqInsert($data);
    	header("Location:".APP_URL."/PfFaq/addFaq");
    }

}
