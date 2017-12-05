<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program_kursus extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('model_paket','model_program'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}

	public function index()
	{
		$data['program'] = $this->model_paket->tampil_program();
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/navbar');
		$this->load->view('web_view/paket/menu_paket_kursus',$data);
		$this->load->view('web_view/footer');	
	}

	public function tambah_program_paket()
	{
		
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/navbar');
		$this->load->view('web_view/paket/tambah_paket_kursus');
		$this->load->view('web_view/footer');	
	}

	public function simpan_program_kursus()
	{
		$nama_program = $this->input->post('nama_program');
		$data_program = array('nama_paket' => $nama_program  );
		$this->model_paket->simpan_paket($data_program);
		redirect('admin/program_kursus','refresh');


	}

}

/* End of file program_kursus.php */
/* Location: ./application/controllers/admin/program_kursus.php */