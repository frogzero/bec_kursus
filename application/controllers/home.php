<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('model_program','model_web','model_login'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}

	public function index()
	{
		$data['tampil_program'] = $this->model_program->tampil_program();
		$this->load->view('web_view/index');
		$this->load->view('login',$data);
		$this->load->view('web_view/footer');
	}

	public function register()
	{
		$tgl_sekarang = date('Y-m-d');
		$nama_siswa = $this->input->post('nama_siswa');
		$password = $this->input->post('password');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$email = $this->input->post('email');
		$notelp = $this->input->post('notelp');
		$agama = $this->input->post('agama');
		$alamat = $this->input->post('alamat');
		$jk = $this->input->post('jk');
		$data_siswa = array(
			'nama' => $nama_siswa,
			'password' => $password,
			'ttl' => $tanggal_lahir,
			'agama' => $agama,
			'alamat' => $alamat,
			'email' => $email,
			'jk' => $jk,
			'no_telp' => $notelp,
			'status' => 'baru',
			'tanggal_daftar' => $tgl_sekarang 
			);
		$this->model_web->simpan_siswa_baru($data_siswa);
	}

	public function menu_awal()
	{
		$this->load->view('web_view/index');
		$this->load->view('web_view/navbar');
		$this->load->view('web_view/header');
		//$this->load->view('web_view/welcome');
		$this->load->view('web_view/menu1');
		$this->load->view('web_view/menu2');
		$this->load->view('web_view/menu3');
		$this->load->view('web_view/menu4');
		$this->load->view('web_view/menu5');
		$this->load->view('web_view/footer');		
	}

	public function cek_user(){
		$nama = $this->input->post('email');
		$password = $this->input->post('password');
		$hasil1 = $this->model_login->login_siswa($nama,$password);
		if($hasil1==0){
			$nama = $this->input->post('email');
			$password = $this->input->post('password');
			$hasil2 = $this->model_login->login_instruktur($nama,$password);
			if($hasil2==0){
							$nama = $this->input->post('email');
							$password = $this->input->post('password');
							$hasil3 = $this->model_login->login_admin($nama,$password);
							if ($hasil3==0) {
								echo '<script language="javascript">';
								echo 'alert("Mohon Maaf, USERNAMA ATAU PASSWORD SALAH !!!!")';
								echo '</script>';
								echo '<script type="text/javascript">';    
							    echo 'window.location.assign("'.site_url().'")'; 
							    echo '</script>';
							}else{				
								$data_session = array(
								'nama_admin' => $nama,
								'level_admin' => "admin",
								'status_admin' => "login",
								'id_admin'=> $hasil3[0]->id_admin
								);
							$this->session->set_userdata($data_session);
							redirect('admin/home_admin','refresh');

							}
				}else{
				$data_session = array(
				'nama_instruktur' => $nama,
				'level_instruktur' => "instruktur",
				'status_instruktur' => "login",
				'id_instruktur'=> $hasil2[0]->id_instruktur
				);
			$this->session->set_userdata($data_session);
			redirect('instruktur/home_instruktur','refresh');

			}
			}else{
				$data_session = array(
				'email_student' => $nama,
				'level_student' => "student",
				'status_student' => "login",
				'kd_siswa'=> $hasil1[0]->id_siswa
				);
			$this->session->set_userdata($data_session);
			redirect('student/home_student','refresh');
			}
		

	}
		public function log_out()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */