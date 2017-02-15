<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_c extends CI_Controller {
	function __construct()
		{
			  parent :: __construct();
			  $this->load->model('User_m','m');

		}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function home(){
		$this->load->view('header');
		$this->load->view('student_home');
		$this->load->view('footer');
	}
	public function parents(){
		$this->load->view('header');
		$this->load->view('parents');
		$this->load->view('footer');
	}
	public function student_registration(){
		$query = $this->m->counter();
		$data['counter'] = $query + 1;
		$this->load->view('header');
		$this->load->view('student_registration',$data);
		$this->load->view('footer');	
	}
	public function getParents(){
		$this->m->getParents();
	}
	public function searchParents(){
		$search = $this->input->post('search');
		$this->m->searchParents($search);
	}
	public function parentsPage(){
		$data['id'] = $this->input->get('id');
		$data['famid'] = $this->input->get('famid');
		$this->load->view('header');
		$this->load->view('parentsPage',$data);
		$this->load->view('footer');
	}

	public function registerStudent(){
		$userdata = array('fname' => $this->input->post('fname'),
						 'mname' => $this->input->post('mname'),
						 'lname' => $this->input->post('lname'),
						 'email' => $this->input->post('email'),
						 'yearlevel' => $this->input->post('yearlevel'),
						 'studentid' => $this->input->post('studentid'),
						 'familyid' => $this->input->post('counter')
						 );
		$fatdata = array('fname' => $this->input->post('fatname'),
						'lname' => $this->input->post('lname'),
						'email' => $this->input->post('fatemail'),
						'relationship' => 'Father',
						'familyid' => $this->input->post('counter')
			);
		$motdata = array('fname' => $this->input->post('motname'),
						'lname' => $this->input->post('lname'),
						'email' => $this->input->post('motemail'),
						'relationship' => 'Mother',
						'familyid' => $this->input->post('counter')
			);
		// echo json_encode($motdata);
		$query = $this->m->registerStudent($userdata,$fatdata,$motdata);
		if($query){
			$message = array('message' => 'success');
			echo json_encode($message);
		}


	public function loadSelectedID(){
		$result = $this->m->loadSelectedID();
	}

	public function loadFamilyMembers(){
		$result = $this->m->loadFamilyMembers();
	}

	public function getlistID(){
		$result = $this->m->getlistID();

	}
}
