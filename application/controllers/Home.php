<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Home extends CI_Controller{

  public function __construct(){
    parent::__construct();
    //echo "This is initialisation <br>";
    $this->load->model("Login_model");
  }

  public function index(){
    //echo "hello this is index function"
    $data=array(
      'title' => "HOME", 
      'page'=>"home_view.php"
      );
//    echo "you have successfully logged-in <br>";
    //print_r($this->input->post());
    //$this->load->view('template',$data);

  }

  public function one(){
        $data=array(
            'title' => "HOME", 
            'page'=>"home_view.php"
            //'page'=>"admin.php"
            );
        //$this->load->helper('form');
            $this->load->view('template',$data);
      //echo "hello this is one <br>";
   // echo "helo these are the parameters : $p1, $p2";
  }
  public function two(){
        $data=array(
              'title' => "HOME", 
              'page'=>"home_report.php"
            );
        //echo "success reporting officer";
        $this->load->view('template',$data);
  }
  public function three(){
              $data=array(
            'title' => "HOME", 
            'page'=>"home_review.php"
            );
        echo "success revewing officer";
      $this->load->view('template',$data);
  }

public function new_insert(){
    echo "welcome";
    $this->Login_model->insert_personaldatas($_POST);
    echo "your response has been recorded";
    //print_r($_POST);
    /*if($_POST){
        'title'=>
         'post'=>
    } */

}
}

?>
