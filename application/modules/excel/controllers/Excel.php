<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel extends CI_Controller {
	
	var $home = "dashboard";
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('M_excel','ws');
		$this->load->library('PHPExcel', '', 'excel');
		if ($this->session->userdata('login') != true) {
			redirect('admin');
		}
	}
	
	public function to_excel($id_ws)
	{
		$tampil_nama = $this->ws->tampildata("reg_workshop",NULL,array("ID_WORKSHOP" => $id_ws));
		$cell = 1;
		
		$this->excel->setActiveSheetIndex(0);
		$this->excel->getActiveSheet()->setTitle("Workshop");
		
		$this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
		$this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(11);
		
		foreach ($tampil_nama as $row) {
			$this->excel->getActiveSheet()->setCellValue('A'.$cell, $row->ID_REG_W);
			$this->excel->getActiveSheet()->setCellValue('B'.$cell, $row->NAMA);
			$cell++;
		}
		
		$filename = 'workshop.xlsx';
		header('Content-type:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');

		$writer = PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');
		$writer->save('php://output');
	}
}