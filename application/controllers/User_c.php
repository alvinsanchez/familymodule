<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_c extends CI_Controller {
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
}
