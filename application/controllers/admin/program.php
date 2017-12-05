<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('model_biaya','model_program','model_paket'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}

	public function index()
	{
		$data['biaya'] = $this->model_biaya->tampil_biaya();
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/navbar');
		$this->load->view('web_view/program/menu_program_biaya',$data);
		$this->load->view('web_view/footer');	
	}

	public function tambah()
	{
		$data['paket'] = $this->model_paket->tampil_program();
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/navbar');
		$this->load->view('web_view/program/tambah_program_biaya',$data);
		$this->load->view('web_view/footer');	
	}

	public function simpan_program()
	{
		$id_program = $this->input->post('id_paket');
		$jenis = $this->input->post('jenis');
		$kategori = $this->input->post('kategori');
		$lama_program = $this->input->post('lama');
		$waktu_program = $this->input->post('waktu');
		$biaya_program = $this->input->post('biaya_program');
		$data_biaya = array(
			'id_paket' => $id_program,
			'jenis' => $jenis,
			'kategori' => $kategori,
			'biaya' => $biaya_program,
			'lama' => $lama_program,
			'waktu' => $waktu_program  
			);
		$this->model_program->simpan_program($data_biaya);
		redirect('admin/program','refresh');


	}


}

/* End of file biaya_program.php */
/* Location: ./application/controllers/admin/biaya_program.php */