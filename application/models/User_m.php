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


	public function counter(){
		$query = $this->db->get('tbl_family');
		$count = $query->num_rows();
		return $count;
	}

	public function registerStudent($userdata,$fatdata,$motdata){
		$fadata = array('familydesc' => $userdata['lname'].' '.'Family', 'familyid' => $userdata['familyid']);
		$this->db->insert('tbl_family',$fadata);
		$this->db->insert('tbl_parents',$motdata);
		$this->db->insert('tbl_parents',$fatdata);
		$this->db->insert('tbl_students',$userdata);

		if ($this->db->affected_rows() > 0){
			return true;
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
			echo json_encode($query->num_rows());
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

	public function addFamilyMember(){
		$data = array(
			'fname'=> $this->input->post('firstname'),
			'lname'=> $this->input->post('lastname'),
			'email'=> $this->input->post('email'),
			'relationship' => $this->input->post('relationship'),
			'familyid'=> $this->input->post('familyID')
		);

		$this->db->insert('tbl_parents', $data);
	}
}
