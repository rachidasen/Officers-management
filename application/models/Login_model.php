<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     public function verifyUser($name){
        $query=$this->db->get_where('officers', array("officer_id"=> $name));
        if($query->num_rows()>=1)
          return true;
        else
          return false;
     }

     public function verifyPass($name,$pass){
          //check the database
        $query = $this->db->get_where('officers', array('officer_id' => $name,'password'=>$pass));
        if($query->num_rows()==1 ){
            
          return true;
        }
        else
          //redirect("He");
          return false;
     }


     public function login($name,$pass,$type){
          //check the database
        $query = $this->db->get_where('officers', array('officer_id' => $name,'password'=>$pass,'officer_type'=>$type));
        if($query->num_rows()==1 ){
            return true;
        }
        else
          //redirect("He");
          return false;
     }

     public function insert_personaldatas($data){
      //$query="INSERT INTO personal_datas "
      $this->db->insert('personal_datas',$data);
      return $this->db->insert_id();
     }
     public function insert_workdatas($data){
      

        $data2=array(
                'id' =>$data['id'],
                'description' =>$data['description'],
                'shortfalls'=>$data['shortfalls'],
                'higher_achievement'=>$data['higher_achievement'],
                'date_of_filling'=>$data['date_of_filling'],
                  'set2' => 1
          );
       $no=count($data['target']);
      //echo "target$no";
      for($i=0;$i<$no;$i++){
          $data2["target$i"]=$data['target'][$i];
          $data2["achievement$i"]=$data['achievement'][$i];
      }
      $this->db->insert('work_infos',$data2);
      //echo"<hr><pre>";print_r($data2);echo"</pre>";
       //print_r($query);
      //return $this->db->insert_id();
     }
     public function edit_workdatas($data){
      //$this->db->where( ) 

      $data2=array(

        );
      $this->db->where('id',$id);
      $this->db->update('personal_datas',$data);
     }
     public function edit_workdates($data){
      $this->db->where('id',$id);
      $this->db->update('work_infos',$data);
     }
     public function get_officer($id){
      $this->db->where('id',$id);
      $query=$this->db->get('personal_datas');
      return $query->result();

     }
     public function get_id($officer_id){
      $this->db->select('id');
      $this->db->where('officer_id', $officer_id);
      $query=$this->db->get('officers');
      if ($query->num_rows()==1)
        return $query->result_array();
     }
     public function checkset($id,$table){
      //echo $id."<br>";
      $this->db->select('set');
      $this->db->where('id',$id);
      $query=$this->db->get($table);
      //$this->db->affected_rows();
      if($query->num_rows()==1 ){
            
          return true;
        }
        else
          //redirect("He");
          return false;
      //     //return true;
      // echo "<br>";
     }

     public function checkset2($id){
      //echo $id."<br>";
      $this->db->select('set2');
      $this->db->where('id',$id);
      $query=$this->db->get('work_infos');
      //$this->db->affected_rows();
      // echo "hihi";
       return $query->result_array();
      //     //return true;
      // echo "<br>";
     }
     public function get_personaldatas($id){
      //$query="INSERT INTO personal_datas "
      $this->db->where('id',$id);
      $query=$this->db->get('personal_datas');
      return $query->result_array();
     }
     public function get_workdatas($id){
      $this->db->where('id',$id);
      $query=$this->db->get('work_infos');
      return $query->result_array();
     }
     public function get_officer_id(){
     // $this->db->select('officer_id','id');
      $this->db->where(array('officer_type' =>1 ));
      $query=$this->db->get('officers');
      $data = array( );
      foreach ($query->result_array() as $row) {
            //print_r($row);
            if($this->checkset($row['id'],'personal_datas')&&$this->checkset2($row['id']))
              if($this->checkset($row['id'],'reportingofficers_part3')){
                $d=array('officer_id' =>$row['officer_id'],'set'=>1);
                $data[]=$d;
              }
              else{
                 $d=array('officer_id' =>$row['officer_id'],'set'=>0);
                $data[]=$d;
              }

      }

      return ($data);
     }

     public function get_report($review){
          $this->db->where('review_officer-id',$review);
          $query=$this->db->get('reviewing_officer');
          return $query->result_array();

     }
     // public function get_officer_review(){
     //   $data=$this->get_officer_id();
     //      if($this->checkset($row['id'],''))
     // }
     public function report1( $data){
      $this->db->insert('reportingofficers_part3',$data);
       return $this->db->insert_id();

     }
     public function report2( $data){
      $this->db->insert('reportingofficers_part4',$data);
       return $this->db->insert_id();

     }
     public function get_officers($reporting_id){
      $data=array();
     $this->db->select('officer-id');
     $query = $this->db->get_where('reporting_officer', array('reporting-officer-id' => $reporting_id,'set'=> 0));
      if($query->num_rows()>=1){
          $d=$query->result_array();
          for($i=0;$i<count($d);$i++)
           $d1[$i]=$d[$i]['officer-id'];
         //echo json_encode($data);
      }
      $query = $this->db->get_where('reporting_officer', array('reporting-officer-id' => $reporting_id,'set !='=> 0));
      if($query->num_rows()>=1){
          $d=$query->result_array();
          for($i=0;$i<count($d);$i++)
           $d2[$i]=$d[$i]['officer-id'];
         //echo json_encode($d);
      }
      $data['unchecked']=$d1;
      $data['checkded']=$d2;
      echo json_encode($data);
     
     }
}

?>

