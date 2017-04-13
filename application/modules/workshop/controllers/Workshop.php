<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Workshop extends CI_Controller {
	
	var $home = "home";
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('M_workshop','ws');
	}
	
	public function genId($work)
	{
		$this->db->where('ID_WORKSHOP',$work);
		$query = $this->db->get("reg_workshop");
		$incre = $query->num_rows() + 1;
		$hari = date("ym");
		return "W".$hari.$work.$incre;
	}
	
	public function index()
	{
		$data['workshop'] = $this->ws->tampildata("workshop",NULL,NULL,NULL,NULL,NULL,"ID_WORKSHOP DESC");
		// $generateid = $this->ws->tampildata("workshop",NULL,NULL,TRUE,NULL,NULL,"ID_WORKSHOP DESC");
		
		$data['title'] = "Pendaftaran Workshop HIC";
		$data['page'] = "reg_workshop";
		$this->load->view($this->home, $data);
	}
	
	public function daftarWorkshop()
	{
		$id_reg = $this->genId($this->input->post('ID_WORKSHOP'));
		$this->form_validation->set_rules('NAMA', 'Nama', 'required');
		$this->form_validation->set_rules('NO_TELP', 'No. Telepon', 'required');
		if ($this->form_validation->run() == FALSE) {
			redirect('workshop');
		}
		$data = array(
			'ID_REG_W' => $id_reg,
			'ID_WORKSHOP' => $this->input->post('ID_WORKSHOP'),
			'NAMA' => $this->input->post('NAMA'),
			'NO_TELP' => $this->input->post('NO_TELP'),
			'ASAL' => $this->input->post('ASAL'),
			'STS_REG' => 0
		);
		$insert = $this->ws->tambahData($data, 'reg_workshop');
		if($insert) {
			$this->session->set_flashdata('notif', 'Rekening berhasil ditambah');
			$this->session->set_flashdata('clr', 'success');
			redirect('workshop');
		}
		else{
			$this->session->set_flashdata('notif', 'maaf data tidak bisa masuk ulangi lagi');
			$this->session->set_flashdata('clr', 'warning');
			redirect('workshop');
		}
	}
}