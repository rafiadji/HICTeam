<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$data['title'] = "Hardware Interactive Club";
		$data['page'] = "home/home";
		$this->load->view('home', $data);
	}
}
