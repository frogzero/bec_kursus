<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_student extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('model_program','model_student','model_jadwal'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}

	public function index()
	{
		$this->load->view('web_student/index');
		$this->load->view('web_student/header');
		$this->load->view('web_student/navbar');
		$this->load->view('web_student/content');
		$this->load->view('web_student/footer');	
	}

	public function jadwal()
	{
		$data['tampil_kelas'] = $this->model_student->tampil_student();
		$this->load->view('web_student/index');
		$this->load->view('web_student/header');
		$this->load->view('web_student/navbar');
		$this->load->view('web_student/jadwal/menu_jadwal',$data);
		$this->load->view('web_student/footer');	
	}
	public function profil_student()
	{
		$data['tampil_profil'] = $this->model_student->tampil_profil_student();
		$this->load->view('web_student/index');
		$this->load->view('web_student/header');
		$this->load->view('web_student/navbar');
		$this->load->view('web_student/profil/menu_profil',$data);
		$this->load->view('web_student/footer');	
	}

	public function beli_paket()
	{
		$data['tampil_program'] = $this->model_program->tampil_program();
		$data['tampil_paket_siswa'] = $this->model_student->tampil_student_paket_siswa();
		$this->load->view('web_student/index');
		$this->load->view('web_student/header');
		$this->load->view('web_student/navbar');
		$this->load->view('web_student/beli_paket/menu_beli_paket',$data);
		$this->load->view('web_student/footer');	
	}
	function simpan_paket_siswa()
	{
		$data = array(
			'id_program' => $this->input->post('program'),
			'id_siswa' => $this->session->userdata('kd_siswa'),
			'status_paket' => 'pending'
			 );
		$this->model_student->beli_paket($data);
				echo '<script language="javascript">';
				echo 'alert("paket berhasil dibeli, silahkan melakukan pembayaran untuk aktivasi !!!!")';
				echo '</script>';
				echo '<script type="text/javascript">';    
				echo 'window.location.assign("'.site_url('student/home_student/beli_paket').'")'; 
				echo '</script>';
	}

}

/* End of file home_admin.php */
/* Location: ./application/controllers/admin/home_admin.php */