<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('dashboard/login');
	}
	
	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|max_length[50]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('notif', "Username salah");
			$this->session->set_flashdata('clr', 'error');
			redirect('admin');
		}
		else{
			$this->session->set_userdata('login',true);
			redirect('dashboard');
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}
}
