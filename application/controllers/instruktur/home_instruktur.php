<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_instruktur extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('model_instruktur','model_jadwal'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}

	public function index()
	{
		$this->load->view('web_instruktur/index');
		$this->load->view('web_instruktur/header');
		$this->load->view('web_instruktur/navbar');
		$this->load->view('web_instruktur/content');
		$this->load->view('web_instruktur/footer');	
	}

	public function jadwal()
	{
		$data['tampil_kelas'] = $this->model_instruktur->tampil_jadwal_instruktur();
		$this->load->view('web_instruktur/index');
		$this->load->view('web_instruktur/header');
		$this->load->view('web_instruktur/navbar');
		$this->load->view('web_instruktur/jadwal/menu_jadwal',$data);
		$this->load->view('web_instruktur/footer');	
	}

	public function profil()
	{
		$id_instruktur = $this->session->userdata('id_instruktur');
		$data['instruktur'] =$this->model_instruktur->tampil_instruktur_login();
		$this->load->view('web_instruktur/index');
		$this->load->view('web_instruktur/header');
		$this->load->view('web_instruktur/navbar');
		$this->load->view('web_instruktur/profil/menu_profil',$data);
		$this->load->view('web_instruktur/footer');	
	}

}

/* End of file home_admin.php */
/* Location: ./application/controllers/admin/home_admin.php */