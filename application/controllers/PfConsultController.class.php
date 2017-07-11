<?php
	class PfConsultController extends Controller
	{		
		public function getConsult(){
			session_start();
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$this->assign('consultant',$_POST['name']);
				$this->assign('consultantContact',$_POST['contact']);
				$this->assign('description',$_POST['problem']);
				$this->assign('submitTime',date("Y-m-d-h-i-s"));
				$data=array();
				$data['consultant']=$this->_view->get('consultant');
				$data['consultantContact']=$this->_view->get('consultantContact');
				$data['description']=$this->_view->get('description');
				$data['submitTime']=$this->_view->get('submitTime');	
				$thisConsult = new PfConsultModel;
				$thisConsult->consultInsert($data);
				$cid = $thisConsult->consultSelectMax();
				$cid = $cid[0]['cid'];
				$_SESSION['cid'] = $cid;
				header("Location:".APP_URL."/PfRepairmen/index?id=$cid"); 
			}
		}
	}