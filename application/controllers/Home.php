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
        if(isset($_SESSION['officer_id'])&&($_SESSION['officer_type']==1)){ 
          $id=$this->get_officers($_SESSION["officer_id"]);
          // print_r($id);
        
         

           $_SESSION['id']=$id[0][0]['id'];
          if(!empty($id[1])){
            //this imply form has been submitted
              // echo "variable set is set";
              $data['set']=$id[1];
              $data['value']=$id[2][0];
             
            //retrieving the data
              //$this->
          }
          if(!empty($id[4])){
            $data['set2']=$id[4];
             $data['value2']=$id[3][0];
          }
          
        //$this->load->helper('form');
            $data['page']=$this->display($data['page']);
            // echo "hello";
            $this->load->view('template',$data);
          } else
            redirect(base_url()."Login");
          
      
      

}

      //echo "hello this is one <br>";
   // echo "helo these are the parameters : $p1, $p2";

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
       //  $id=$this->Login_model->get_id($_SESSION['officer_id']);
    if(isset($_SESSION['id'])){
          $flag=$this->Login_model->checkset($_SESSION['id'],"reportingofficers_part3");
       //echo $flag;
      if($flag){
        $data['select']=1;
        //print_r($flag); 
      }
      else
        $data['select']=0;
    }
      $data['id']=$this->get_officers_id();
      //echo "success reporting officer";
      if($_SESSION['officer_type']==2){
        $data['page']=$this->display($data['page']);
        $this->load->view('template',$data);
       //print//_r($data);//($data['id'][0]['id']);
      // echo "<br>";
      // echo count($id);
      }
      else
          redirect(base_url()."Login");
}

public function three(){
              $data=array(
            'title' => "HOME", 
            'page'=>"home_review.php"
            );
        //echo "success revewing officer";
        //$data['id']=$this->get_reporting_officers();
        if($_SESSION['officer_type']==3){
          $data['repoting_offcr']=$this->Login_model->get_report($_SESSION['officer_id']);
          $data['page']=$this->display($data['page']);
          $this->load->view('template',$data);
           //print_r($data);//($data['id'][0]['id']);
          // echo "<br>";
          // echo count($id);
        }
        else
          redirect(base_url()."Login");
  }

public function insert_personal(){
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
            )
      );  

      $this->form_validation->set_rules($config);
      //$this->form_validation->set_rules('description','Description','alpha_dash|alpha_numeric_spaces');
      if($this->form_validation->run() == FALSE){
          $data['errors']= validation_errors();
          print_r($data['errors']);

      }
      else{
        echo "your form has been sent";
        unset($_POST['choice']);
        // var_dump($_POST);
         $this->Login_model->insert_personaldatas($_POST);
        echo "your response has been recorded";
         redirect('home/one');
      }
}
  


public function insert_work_infos(){
  $_POST['id']=$this->session->userdata('id');
  $_POST['set']=1;
  $config=array(
            array(
                'field' => 'description',
                'label' =>  'Description',
                'rules' =>  'trim|alpha_numeric_spaces'
              ),
             array(
              'field' => 'target[]',
              'label' =>  'TARGET',
              'rules' =>  'trim|alpha_numeric_spaces'
             ),
             array(
              'field' => 'achievement[]',
              'label' => 'ACHIEVEMENTS',
               'rules' =>  'trim|alpha_numeric_spaces'
             ),
             array(
              'field' => 'shortfalls',
              'label' =>  'SHORTFALL',
              'rules' =>  'trim|alpha_numeric_spaces'
             ),
             array(
              'field' => 'higher_achievement',
              'label' =>  'HIGHER ACHIEVEMENTS',
               'rules' =>  'trim|alpha_numeric_spaces'  
             )
      );
  $this->form_validation->set_rules($config);
  if($this->form_validation->run() == FALSE){
         $data['errors']= validation_errors();
    print_r($data['errors']);
  }
  else{
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // echo count($_POST['target']);
    $this->Login_model->insert_workdatas($_POST);
    echo "Success inserted";
    //$this->Login_model->edit_workdatas($_POST);
    redirect('home/one');
  }
}
public function get_officers($officer_id){
    $id[0]=$this->Login_model->get_id($officer_id);
    // print_r($id[0]);
    // echo "<br>";
    $id[1]=$this->Login_model->checkset($id[0][0]['id'],"personal_datas");
    // print_r($id[1]);
    // echo "<br>";
    $id[2]=$this->Login_model->get_personaldatas($id[0][0]['id']);
    $id[3]=$this->Login_model->get_workdatas($id[0][0]['id']);
    $id[4]=$this->Login_model->checkset2($id[0][0]['id']);
    return $id;
}
    public function admin(){
        $q=$this->db->get();
    }

    public function get_officers_id(){
      return $this->Login_model->get_officer_id();
    }


    public function ajax_view(){
       $data=array(
            'title' => "HOME", 
            'page'=>"home_view.php"
            //'page'=>"admin.php"
            );
          $id=$this->get_officers($_POST['id']);
          $_SESSION['id']=$id[0][0]['id'];

          if(!empty($id[1])){
            //this imply form has been submitted
              // echo "variable set is  is set";
              $data['set']=1;
              $data['value']=$id[2][0];
             
            //retrieving the data
              //$this->
          }
          if(!empty($id[4])){
            $data['set2']=1;
             $data['value2']=$id[3][0];
          }
          
        $this->load->helper('form');
            $data['page']=$this->display($data['page']);
            //print_r($data);
           $this->load->view('home_view',$data);
    }
    public function reporting_officer1(){
       // print_r($_POST);
        //redirect(base_url()."Home/two");
        // echo $flag;
         $id=$this->Login_model->get_id($_SESSION['officer_id']);
         $_POST['reporting-officer-id']=$id[0]['id'];
         //$_POST['id']=$_SESSION['id'];
         $_POST['set']='1';
         $this->Login_model->report1($_POST);
        
      

    }
    public function reporting_officer2(){
       // print_r($_POST);
        //redirect(base_url()."Home/two");
        // echo $flag;
         $id=$this->Login_model->get_id($_SESSION['officer_id']);
         $_POST['reporting_officer2-officer-id']=$id[0]['id'];
         $_POST['id']=$_SESSION['id'];
         $_POST['set']=1;
         $this->Login_model->report2($_POST);
        
      

    }
    public function reporting(){
      //officer jiske reporting ki jaa rahi hai
     
     
      if(isset($_POST['id'])){
        $id=$this->Login_model->get_id($_POST['id']);
         $_SESSION['id']=$id[0]['id'];
      }
       $flag=$this->Login_model->checkset($_SESSION['id'],"reportingofficers_part3");
       // echo $id[0]['id'];
      if($flag){
         //echo "<div>YOU HAVE CHECKED IT</div>";
         //($flag);
       echo 1;
      }
      else{
        echo 0;
      }
      
      //print_r($_POST);
      

    }

    public function get_officer_reporting(){
      //$_POST=json_decode($_POST);
      //print_r($_POST);
      $d=($this->Login_model->get_officers($_POST['id']));
      //print_r($d);
      echo json_encode($d);


    }

    public function get_reporting_officer(){
      
      $data=$this->Login_model->get_reporting_officer($_POST['id']);
      $data['title'] = "HOME";
    // $data['page']="rep.php";
      $data['set']=1;
      //   //     //'page'=>"admin.php"
      //   //     );

      //print_r($data);
      $this->load->view($_POST['page'],$data);
    }

    public function insert_reviewofficer(){
      $_POST['LOS']=(int)$_POST['LOS'];
      $_POST['agree']=(int)$_POST['agree'];
      $_POST['review_id']=$_SESSION['officer_id'];
      $this->Login_model->insert_report($_POST);
      
      //echo $d;
      // echo 'hello';
    }
    public function status(){
      $a=$this->Login_model->checkset($_SESSION['id'],'personal_datas');
      $b=$this->Login_model->checkset2($_SESSION['id']);
      if($a==true && $b=true){
        $a=$this->Login_model->status($_POST['officer_id']);   
        if($a!=false)
          echo($a[0]['set']);
        else
          echo "5";
      }
      else
        echo '-1';
      }
    public function staus(){
   /*   $a=$this->Login_model->checkset($_SESSION['id'],'personal_datas');
      $b=$this->Login_model->checkset2($_SESSION['id']);
      if($a==true && $b=true){
   */     $a=$this->Login_model->status($_POST['officer_id']);   
        if($a!=false)
          echo($a[0]['set']);
        else
          echo "5";
   // //   }
   //    else
   //      echo '-1';
      }
}



?>
