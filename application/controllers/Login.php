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
     		$this->form_validation->set_rules('username','Officer_id','required|callback_verifyUser');
     		$this->form_validation->set_rules('password' ,'Password','required|callback_verifyPass');
               //$this->form_validation->set_rules('optionlist','')
               $this->form_validation->set_rules('optionlist', 'Type', 'required|callback_greaterthan');

                   //                          );
               //$this->form_validation->set_rules('optionlist','Select Options','required|greater_than[0]');
              	if($this->form_validation->run()==false){
     			$this->load->view('template',$data);
     		}
     		else{
                    echo "success";
                    $choice=$this->input->post('optionlist');
                    switch($choice){
                         case 1: $choice='one';
                                   break;
                         case 2: $choice='two';
                                   break;
                         case 3: $choice='three';
                                   break;
                    }
                    redirect("Home/$choice");
     		}
     }
     public function greaterthan(){
          $v=$this->input->post('optionlist');
          if($v>0)
               return TRUE;
          else
               $this->form_validation->set_message('greaterthan','Please select ');
               return false;
     }
     public function verifyUser($name){

               if($this->Login_model->verifyUser($name)){
                    return TRUE;
               }
               else{
                    $this->form_validation->set_message('verifyUser', 'Incorrect {field} ');
                    return false;
               }
     }
     public function verifyPass(){
     	$name=$this->input->post('username');
     	$pass=$this->input->post('password');
 	
     	if($this->Login_model->login($name,$pass)){
     		return true;

     	}else{
     		     		//user doesn't exist
               //echo "Wrong username and password";
     		 $this->form_validation->set_message('verifyPass','Incorrect  password. Please try again');
     		return false;

     	}

     }
}

?>

