<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	var $d;
	public function __construct(){
			parent::__construct();
			$this->d=array('page'=>'admin.php','title'=>'login');
            $this->load->model("Login_model");
            $this->load->model('Admins');

		}

	public function index(){
		$d=$this->d;
		$d['detail1']=$this->get_officer('general_officer');
		$d['detail2']=$this->get_officer('reporting_officer');
		$d['detail3']=$this->get_officer('reviewing_officer');
		$this->load->view('template1',$d);
		//echo "hello";
	}
	public function get_officer($type){
		return $this->Admins->getprofile($type);
	}
	public function del(){
		$q=$this->Admins->del($_POST);
		if($q)
			return true;
		else
			return false;
	}

	public function insert_gen(){
		$_POST['officer_type']='general_officer';
		$this->Admins->insert_officer($_POST);
	}
	public function insert_rep(){
		$_POST['officer_type']='reporting_officer';
		$this->Admins->insert_officer($_POST);
	}
	public function insert_rev(){
		$_POST['officer_type']='reviewing_officer';
		$this->Admins->insert_officer($_POST);
	}
	public function del2(){
		$q=$this->Admins->del2($_POST);
		
	}
	public function del3(){
		$q=$this->Admins->del3($_POST);
		
	}
}


?>