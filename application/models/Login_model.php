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
      $this->db->insert('work_infos ',$data);
       return $this->db->insert_id();
     }
     public function edit_personaldatas($data){
      //$this->db->where( ) 
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
     public function checkset($id){
      //echo $id."<br>";
      $this->db->select('set');
      $this->db->where('id',$id);
      $query=$this->db->get('personal_datas');
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
}

?>

