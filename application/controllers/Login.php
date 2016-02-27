<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Login extends CI_Controller {

		var $data;
		public function __construct(){
			parent::__construct();
			$this->data=array('page'=>'login_view','title'=>'login','year'=>date('Y'));
      $this->load->model("Login_model");

		}
	  public function index()
     {
          //get the posted values
     	$data=$this->data;
      // $data['year'] = date('Y');
      // echo $data['year'];
     	$this->load->view('template',$data);
               	
     }
     public function login(){
     	//form validation
          $data=$this->data;
         if($_POST){
     		
     		$this->form_validation->set_rules('username','Officer_id','required|callback_verifyUser');
     		$this->form_validation->set_rules('password' ,'Password','required|callback_verifyPass');
        $this->form_validation->set_rules('optionlist','OptionList','required');
        $this->form_validation->set_rules('optionlist', 'OFFICER SELECTED', 'required|callback_greaterthan');
        // $this->form_validation->set_rules('year', 'year SELECTED', 'required');

                   //                          );
               //$this->form_validation->set_rules('optionlist','Select Options','required|greater_than[0]');
          if($this->form_validation->run()==false){
     			$this->load->view('template',$data);
     		}
     		else{
                     // $data['id']=$this->Login_model->get_id('officer_id');
                     // $data['year']=
                     $this->session->set_userdata('officer_id',$_POST['username']);
                     $this->session->set_userdata('officer_type',$_POST['optionlist']);
                     $this->session->set_userdata('year',$_POST['year']);

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
                    redirect(base_url()."Home/$choice");
     		}
         }else
           $this->load->view('template',$data);
     }
    
     public function greaterthan(){
          $v=$this->input->post('optionlist');
          if($v>0){ 
               switch($v){
                         case 1: $v='general_officer';
                                   break;
                         case 2: $v='reporting_officer';
                                   break;
                         case 3: $v='reviewing_officer';
                                   break;
                    }

                $name=$this->input->post('username');
                $pass=$this->input->post('password');
               
               
              if($this->Login_model->login($name,$pass,$v))
                     return true;

               else{
                       $this->form_validation->set_message('greaterthan','Incorrect {field} ');
               return false;
             }
              //return true;

         }
          else{
               $this->form_validation->set_message('greaterthan','Please select ');
               return false;
          }
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
 	
     	if($this->Login_model->verifyPass($name,$pass)){
     		return true;

     	}else{
     		     		//user doesn't exist
               //echo "Wrong username and password";
     		 $this->form_validation->set_message('verifyPass','Incorrect  password. Please try again');
     		return false;

     	}

     }
     public function logout(){
          $this->session->sess_destroy();
          redirect(base_url().'Login/login' );
     }
}

?>

