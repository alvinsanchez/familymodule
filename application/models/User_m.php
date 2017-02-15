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

	public function fetchParents($parent){
		$query = $this->db->query("SELECT CONCAT(fname,' ',lname) as fullname FROM tbl_parents WHERE fname LIKE '%{$parent}%' ");
		if($query->num_rows() > 0){
			foreach($query->result_array() as $row){
				$row_set[] = htmlentities(stripslashes($row['fullname']));
			}
			echo json_encode($row_set);
		}
		else{
			echo 'no data';
		}
	}

}
