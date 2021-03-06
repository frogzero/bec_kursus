<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_aktif extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('model_admin','model_program','model_web','model_siswa'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}

	public function index()
	{
		$data['siswa_baru'] =$this->model_admin->tampil_siswa_aktif();
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/navbar');
		$this->load->view('web_view/siswa_aktif/siswa_aktif',$data);
		$this->load->view('web_view/footer');	
		
	}

	public function tambah()
	{
		$data['tampil_program'] = $this->model_program->tampil_program();
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/navbar');
		$this->load->view('web_view/siswa_baru/tambah_siswa_baru',$data);
		$this->load->view('web_view/footer');	
		
	}

	public function form_ubah($id_siswa)
	{
		$data['tampil_program'] = $this->model_program->tampil_program();
		$data['tampil_siswa_ubah'] = $this->model_siswa->tampil_siswa_ubaha($id_siswa);
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/navbar');
		$this->load->view('web_view/siswa_aktif/form_ubah',$data);
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
		$program = $this->input->post('program');
		$agama = $this->input->post('agama');
		$alamat = $this->input->post('alamat');
		$jk = $this->input->post('jk');
		$jenjang = $this->input->post('jenjang');
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
		redirect('admin/siswa_baru','refresh');
	}

	public function simpan_ubah($id_siswa)
	{
		$tgl_sekarang = date('Y-m-d');

		$nama_siswa = $this->input->post('nama_siswa');
		$password = $this->input->post('password');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$email = $this->input->post('email');
		$notelp = $this->input->post('notelp');
		$program = $this->input->post('program');
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
			'status' => $this->input->post('status')
			);
		$this->db->where('id_siswa', $id_siswa);
		$this->db->update('siswa', $data_siswa);


		redirect('admin/siswa_aktif','refresh');
	}

	function hapus($id_siswa)
	{
		$this->db->where('id_siswa', $id_siswa);
		$this->db->delete('siswa');
		
		redirect('admin/siswa_aktif','refresh');
	}

	



	public function konfirmasi_siswa($id_siswa)
	{
		$data_siswa = array('status' => 'aktif', );
		$this->model_web->siswa_baru_konfirmasi($data_siswa,$id_siswa);
		redirect('admin/siswa_baru','refresh');
		
	}

}

/* End of file siswa_baru.php */
/* Location: ./application/controllers/admin/siswa_baru.php */