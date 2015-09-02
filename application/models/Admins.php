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

     public function off_del($data)
     {
       $this->db->delete('reporting_officer',array('id'=>$data['id']));
       $this->db->delete('reportingofficers_part3',array('id'=>$data['id']));
       //$this->db->delete('reporting_officer');
      //  $this->db->where('officer_id',$data['id']);
      // $this->db->update('officers',array('set' => -1));
     }

     public function rff_del($data){
      $this->db->delete('reviewing_officer',array('reporting-officer-id'=>$data['id']));
       // $this->db->delete('reviewingofficers',array('reporting-officer-id'=>$data['id']));
     }

     public function del2($data)
    {
      $q=$this->db->delete('officers',array('officer_id' => $data['id'] ));
      $this->db->delete('reporting_officer',array('reporting-officer-id' => $data['id'] ));
      $this->db->delete('reportingofficers_part3',array('reporting-officer-id' =>$data['v']));
      
      $this->db->delete('reviewing_officer',array('reporting-officer-id' =>$data['id']));
      //return $q;

    }
     public function del3($data)
    {
      $q=$this->db->delete('officers',array('officer_id' => $data['id'] ));
      $this->db->delete('reviewingofficers',array('id' => $data['id'] ));
      
      $this->db->delete('reviewing_officer',array('review_officer-id' =>$data['id']));
      // $this->db->where('officer_id',$data['id']);
      // $this->db->update('officers',array('set' => 1));
      //return $q;

    }
    public function insert_officer($data){

      $this->db->insert('officers',$data);
    }
    public function show($table,$const,$id){
      $q=$this->db->get_where($table,array($const => $id ));
      if($q->num_rows()>=1)
          return $q->result_array();
        else
          return false;
    }


    public function add_off($data){
      $this->db->insert('reporting_officer',$data);
      $this->db->where('officer_id',$data['id']);
      $this->db->update('officers',array('set' => 1));
    }

    public function add_rff($data){
      $this->db->insert('reviewing_officer',$data);
      // $this->db->where('officer_id',$data['id']);
      // $this->db->update('officers',array('set' => 1));
    }
  }
// $q=$this->db->get_where('officers',array('officer_type' => 'general' ));
//     	$b=$q->result_array();
//          var_dump($b);
//     	return $b;

?>

