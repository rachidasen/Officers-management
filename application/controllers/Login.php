<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Controller {

		var $data;
		public function __construct(){
			parent::__construct();
			$this->data=array('page'=>'login_view','title'=>'login');
               $this->load->model("Login_model");

		}
	  public function index()
     {
          //get the posted values
     	$data=$this->data;
     	$this->load->view('template',$data);
               	
     }
     public function checklogin(){
     	//form validation
     		$data=$this->data;
     		$this->form_validation->set_rules('username','Username','required');
     		$this->form_validation->set_rules('password' ,'Password','required|callback_verifyUser');
              	if($this->form_validation->run()==false){
     			$this->load->view('template',$data);
     		}
     		else{
                    
     		}
     }
     public function verifyUser(){
     	$name=$this->input->post('username');
     	$pass=$this->input->post('password');
          $option=$this->input->post('optionlist');
     	
     	if($this->Login_model->login($name,$pass,$option)){
     		return true;

     	}else{
     		     		//user doesn't exist
               //echo "Wrong username and password";
     		 $this->form_validation->set_message('verifyUser','Incorrect officer_id or password. Please try again');
     		return false;

     	}

     }
}

?>

