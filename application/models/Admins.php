<?php defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Admins extends CI_Model{

    public function getprofile($type)
    {
      # code...
    	$q=$this->db->get_where('officers',array('officer_type' => $type ));
    	$b=$q->result_array();
         //var_dump($b);
    	return $b;
    }
    public function del($data)
    {
      $q=$this->db->delete('officers',array('officer_id' => $data['id'] ));
      $this->db->delete('reporting_officer',array('id' => $data['id'] ));
      $this->db->delete('reportingofficers_part3',array('id' =>$data['v']));
      $this->db->delete('personal_datas',array('id' =>$data['v']));
      $this->db->delete('work_infos',array('id' =>$data['v']));
      //return $q;

    }
    public function insert_officer($data){
      
      $this->db->insert('officers',$data);
    }
  }
// $q=$this->db->get_where('officers',array('officer_type' => 'general' ));
//     	$b=$q->result_array();
//          var_dump($b);
//     	return $b;

?>

