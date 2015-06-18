<?php

class Home extends CI_Controller{

  /*public function __construct(){
    parent::__construct();
    echo "This is initialisation <br>";
  }*/

  public function index(){
    //echo "hello this is index function"
    $data=array(
      'title' => "HOME", 
      'page'=>"home_view.php"
      );
    echo "you have successfully logged-in <br>";
    print_r($this->input->post());
    //$this->load->view('template',$data);

  }

  public function one($p1,$p2){
    echo "hello this is one <br>";
    echo "helo these are the parameters : $p1, $p2";
  }
}

?>
