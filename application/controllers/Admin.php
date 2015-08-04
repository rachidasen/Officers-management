<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	var $d;
	public function __construct(){
			parent::__construct();
			$this->d=array('page'=>'admin.php','title'=>'login');
            $this->load->model("Login_model");
            //$this->load->model('Admin');

		}

	public function index(){
		$d=$this->d;
		$this->load->view('template',$d);
		echo "hello";
	}
}


?>