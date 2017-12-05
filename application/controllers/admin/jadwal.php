<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model(array('model_jadwal','model_instruktur','model_siswa','model_program','model_kelas'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}

	public function index()
	{
		$data['jadwal'] =$this->model_jadwal->tampil_jadwal();
		$data['tampil_kelas'] = $this->model_kelas->tampil_kelas();
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/navbar');
		$this->load->view('web_view/jadwal/menu_jadwal',$data);
		$this->load->view('web_view/footer');	
		
	}

	public function tambah($id_kelasa,$id_program)
	{
		$id_kelas = $id_kelasa;
		$id_programa = $id_program; 
		$data['id_kelas'] = $id_kelasa;
		$data['tampil_siswa'] = $this->model_siswa->tampil_siswa_aktif($id_programa);
		$data['tampil_instruktur'] = $this->model_instruktur->tampil_instruktur();
		$data['tampil_program'] = $this->model_program->tampil_program();
		$data['tampil_kelas'] = $this->model_kelas->tampil_kelas();

		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/navbar');
		$this->load->view('web_view/jadwal/tambah_jadwal',$data);
		$this->load->view('web_view/footer');	
	}

	public function tambah_kelas()
	{
		$data['tampil_siswa'] = $this->model_siswa->tampil_siswa();
		$data['tampil_instruktur'] = $this->model_instruktur->tampil_instruktur();
		$data['tampil_program'] = $this->model_program->tampil_program();
		$data['tampil_kelas'] = $this->model_kelas->tampil_kelas();
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/navbar');
		$this->load->view('web_view/jadwal/tambah_kelas',$data);
		$this->load->view('web_view/footer');	
	}
	public function simpan_kelas()
	{
		$nama_kelas= $this->input->post('kelas');
		$id_paket = $this->input->post('paket');
		$data = array
					('nama_kelas' => $nama_kelas,
					 'id_paket'=>$id_paket);
		$this->model_kelas->simpan($data);
		redirect('admin/jadwal','refresh');		
	}

	public function simpan_jadwal()
	{
		$nama_kelas= $this->input->post('id_kelas');
		$nama_siswa = $this->input->post('siswa');
		$nama_instruktur = $this->input->post('instruktur');
		$program = $this->input->post('nama_paket');
		$jam = $this->input->post('jam');
		$hari = $this->input->post('hari');
		$data = array
					('id_siswa' => $nama_siswa,
					 'id_kelas' => $nama_kelas,
					 'id_instruktur' => $nama_instruktur,
					 'jam' => $jam,
					 'hari'=>$hari);
		$this->model_jadwal->simpan($data);
		redirect('admin/jadwal','refresh');			
	}

}

/* End of file jadwal.php */
/* Location: ./application/controllers/admin/jadwal.php */