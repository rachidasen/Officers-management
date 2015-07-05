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
        if(isset($_SESSION['officer_id'])){
           $id=$this->get_officers($_SESSION["officer_id"]);
          // print_r($id);
           $_SESSION['id']=$id[0][0]['id'];
        if(!empty($id[1])){
            //this imply form has been submitted
              echo "variable set is set";
              $data['set']=$id[1];
              $data['value']=$id[2][0];
            //retrieving the data
              //$this->
          }
         }
        //$this->load->helper('form');
        $data['page']=$this->display($data['page']);
        //echo "hello";
       $this->load->view('template',$data);



      //echo "hello this is one <br>";
   // echo "helo these are the parameters : $p1, $p2";
  }
  public function display($page){
    /* uncomment to restrict  visting officers link directly
    */
    if ($this->session->userdata('officer_id')) 
           return $page;
    else{
       $page="login_view.php"; 
        return $page;
    }

  }

  public function two(){
        $data=array(
              'title' => "HOME", 
              'page'=>"home_report.php"
            );
        //echo "success reporting officer";
        $data['page']=$this->display($data['page']);
        $this->load->view('template',$data);
  }
  public function three(){
              $data=array(
            'title' => "HOME", 
            'page'=>"home_review.php"
            );
        //echo "success revewing officer";
        $data['page']=$this->display($data['page']);
      $this->load->view('template',$data);
  }

public function new_insert(){
  // validation of some input fields
      
      $_POST['id']=$this->session->userdata('id');
      $_POST['set']=1;
      //print_r($_POST);
      $config=array(
             array(
               'field' => 'fname',
                'label' => 'Name',
                'rules' => 'required|alpha',
                'errors' => array(
                           'required' => 'You have not provided %s.'
                   )
            ),
             array(
               'field' => 'lname',
               'label' => 'Name',
               'rules' => 'alpha',
            ),
             array(
                'field' => 'description',
                'label' =>  'Description',
                'rules' =>  'alpha_dash|alpha_numeric_spaces'
              ),
             array(
              'field' => 'target[]',
              'label' =>  'TARGET',
              'rules' =>  'alpha_dash|alpha_numeric_spaces'
             ),
             array(
              'field' => 'achievement[]',
              'label' => 'ACHIEVEMENTS',
              'rules' => 'alpha_dash|alpha_numeric_spaces'
             ),
             array(
              'field' => 'shortfalls',
              'label' =>  'shortfalls',
              'rules' => 'alpha_dash|alpha_numeric_spaces'
             ),
             array(
              'field' => 'higher_achievement',
              'label' =>  'HIGHER ACHIEVEMENTS',
              'rules' => 'alpha_dash|alpha_numeric_spaces'
             )
      );

      $this->form_validation->set_rules($config);
      $this->form_validation->set_rules('description','Description','alpha_dash|alpha_numeric_spaces');
      if($this->form_validation->run() == FALSE){
          $data['errors']= validation_errors();
          print_r($data['errors']);

      }
      else{
        echo "your form has been sent";
         $this->Login_model->insert_personaldatas($_POST);
        echo "your response has been recorded";
          $_SESSION['personal_datas']=1;
          redirect('home/one');
      }
}
public function get_officers($officer_id){
    $id[0]=$this->Login_model->get_id($officer_id);
    // print_r($id[0]);
    // echo "<br>";
    $id[1]=$this->Login_model->checkset($id[0][0]['id']);
    // print_r($id[1]);
    // echo "<br>";
    $id[2]=$this->Login_model->get_personaldatas($id[0][0]['id']);
    // print_r($id[2]);
    // echo "<br>";
     // print_r($id[2]);
    return $id;
}
    public function admin(){
        $q=$this->db->get();
    }
}

?>
