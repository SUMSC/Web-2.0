<?php
	class PfConsultController extends Controller
	{		
		public function getConsult(){
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$this->assign('consultant',$_POST['name']);
				$this->assign('consultantContact',$_POST['contact']);
				$this->assign('description',$_POST['problem']);
				$this->assign('submitTime',date("Y-m-d-H-i-s"));
				$this->page(APP_URL."/PfConsult/add");
			}
		}

		public function add(){
			$data=array();
			$data['consultant']=$this->_view->get('consultant');
			$data['consultantContact']=$this->_view->get('consultantContact');
			$data['description']=$this->_view->get('description');
			$data['submitTime']=$this->_view->get('submitTime');			
			(new PfConsultModel)->consultInsert($data);
			$this->page(APP_URL."/PfRepairmen/index")
		}
	}