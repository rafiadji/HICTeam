<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Workshop_admin extends CI_Controller {
	
	var $home = "dashboard";
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('M_workshop','ws');
		$this->load->library('PHPExcel', '', 'excel');
		$this->header = new PHPExcel_Worksheet_HeaderFooterDrawing();
		$this->headeri = new PHPExcel_Worksheet_HeaderFooterDrawing();
		$this->headerj = new PHPExcel_Worksheet_HeaderFooterDrawing();
		if ($this->session->userdata('login') != true) {
			redirect('admin');
		}
	}
	
	public function index()
	{
		$data['workshop'] = $this->ws->tampildata("workshop",NULL,NULL,NULL,NULL,NULL,"ID_WORKSHOP DESC");		
		$data['title'] = "Workshop HIC";
		$data['page'] = "workshop";
		$this->load->view($this->home, $data);
	}
	
	public function tambahWorkshop()
	{
		$this->form_validation->set_rules('NAMA_W', 'Nama Workshop', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('notif',validation_errors());
			$this->session->set_flashdata('mod','warning');
			redirect('workshop_admin');
		}
		$data = array(
			'NAMA_W' => $this->input->post('NAMA_W')
		);
		$insert = $this->ws->tambahData($data, 'workshop');
		if($insert) {
			$this->session->set_flashdata('notif','Tambah Workshop berhasil');
			$this->session->set_flashdata('mod','success');
			redirect('workshop_admin');
		}
		else{
			redirect('workshop_admin');
		}
	}
}