<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket_siswa extends CI_Controller {

		public function __construct(){
		parent::__construct();
		$this->load->model(array('model_jadwal','model_paket_siswa','model_siswa','model_program','model_kelas'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}

	public function index()
	{
		$data['tampil_paket_siswa'] = $this->model_paket_siswa->tampil_student_paket_siswa();
		$data['tampil_program'] = $this->model_program->tampil_program();
		$data['tampil_siswa'] = $this->model_siswa->tampil_siswa();
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/navbar');
		$this->load->view('web_view/paket_siswa/menu_paket_siswa',$data);
		$this->load->view('web_view/footer');	
	}

	function ubah_pending($id_paket_siswa)
	{

		$this->db->query("update paket_siswa set status_paket='pending' where id_paket_siswa='$id_paket_siswa'");
		redirect(site_url('admin/paket_siswa'),'refresh');
	}
		function ubah_aktif($id_paket_siswa)
	{

		$this->db->query("update paket_siswa set status_paket='aktif' where id_paket_siswa='$id_paket_siswa'");
			redirect(site_url('admin/paket_siswa'),'refresh');
	}
		function ubah_gagal($id_paket_siswa)
	{

		$this->db->query("update paket_siswa set status_paket='gagal' where id_paket_siswa='$id_paket_siswa'");
		redirect(site_url('admin/paket_siswa'),'refresh');
	}

	function simpan_paket_siswa()
	{
		$data = array(
						'id_program' => $this->input->post('program'),
						'id_siswa' => $this->input->post('siswa'),
						'status_paket' => $this->input->post('status')
					);
		$this->model_paket_siswa->simpan_paket_siswa($data);
		redirect(site_url('admin/paket_siswa'),'refresh');
	}

	public function hapus_paket_siswa($id_paket_siswa)
	{
		$this->db->where('id_paket_siswa', $id_paket_siswa);
		$this->db->delete('paket_siswa');
		redirect(site_url('admin/paket_siswa'),'refresh');
	}

}

/* End of file model_paket_siswa.php */
/* Location: ./application/controllers/admin/model_paket_siswa.php */