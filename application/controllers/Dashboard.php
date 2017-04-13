<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login') != true) {
			redirect('admin');
		}
	}
	
	public function index()
	{
		$data['title'] = "Hardware Interactive Club";
		$data['page'] = "dashboard/home";
		$this->load->view('dashboard', $data);
	}
}
