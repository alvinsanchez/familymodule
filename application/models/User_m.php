<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

	public function getParents(){
		$query = $this->db->get('tbl_parents');
		$message = array('message' => 'no data');
		if ($query->num_rows() > 0){
			echo json_encode($query->result());
		}
		else{
			echo json_encode($message);
		}
	}


	public function searchParents($search){

		$this->db->like('fname', $search);
		$this->db->or_like('lname', $search);

		$query = $this->db->get('tbl_parents');
		$message = array('message' => 'No data found');

		if($query->num_rows() > 0){
			echo json_encode($query->result());
		}
		else{
			echo json_encode($message);
		}

	}

	public function loadSelectedID(){
		$myID = $this->input->post('myID');
		$query = $this->db->query("SELECT * FROM tbl_parents WHERE id='$myID'");
		if($query->num_rows() > 0){
			echo json_encode($query->row());
		}
		else{
			return false;
		}
	}

	public function loadFamilyMembers(){
		$myID = $this->input->post('myID');
		$famid = $this->input->post('famid');
		$query = $this->db->query("SELECT * FROM tbl_parents WHERE familyid='$famid' and id!='$myID'");
		if($query->num_rows() > 0){
			echo json_encode($query->result());
		}
		else{
			return false;
		}
	}

	public function getlistID(){
		$memberID = $this->input->post('memberID');
		$famid = $this->input->post('famid');
		$query = $this->db->query("SELECT * FROM tbl_parents WHERE familyid='$famid' and id='$memberID'");
		if($query->num_rows() > 0){
			echo json_encode($query->row());
		}
		else{
			return false;
		}
	}
}
