<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instruktur extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('model_instruktur'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}

	public function index()
	{
		$data['instruktur'] =$this->model_instruktur->tampil_instruktur();
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/navbar');
		$this->load->view('web_view/instruktur/menu_intruktur',$data);
		$this->load->view('web_view/footer');	
		
	}

	public function tambah()
	{
	
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/navbar');
		$this->load->view('web_view/instruktur/tambah_instruktur');
		$this->load->view('web_view/footer');	
	}

	public function simpan_instruktur()
	{
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');
		$ttl = $this->input->post('ttl');
		$alamat = $this->input->post('alamat');
		$agama = $this->input->post('agama');
		$email = $this->input->post('email');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$no_hp = $this->input->post('no_hp');
		$data_instruktur = array(
			'nama_instruktur' => $nama,
			'password_instruktur' => $password,
			'ttl_instruktur' => $ttl,
			'alamat_instruktur' => $alamat,
			'agama_instruktur' => $agama,
			'email_instruktur' => $email,
			'jenis_kelamin_instruktur' => $jenis_kelamin,
			'no_hp_instruktur' => $no_hp
			);
		$this->model_instruktur->simpan_instruktur($data_instruktur);
		redirect('admin/instruktur','refresh');


	}

}

/* End of file instruktur.php */
/* Location: ./application/controllers/admin/instruktur.php */