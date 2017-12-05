<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_student extends CI_Model {

function tampil_student()
	{
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->join('instruktur', 'instruktur.id_instruktur = jadwal.id_instruktur');
		$this->db->join('siswa', 'siswa.id_siswa = jadwal.id_siswa');
		$this->db->join('kelas', 'kelas.id_kelas = jadwal.id_kelas');
		$this->db->join('paket', 'paket.id_paket = kelas.id_paket', 'left');
		$this->db->where('jadwal.id_siswa', $this->session->userdata('kd_siswa'));

		$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
	}

	function tampil_profil_student()
	{
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('id_siswa', $this->session->userdata('kd_siswa'));

		$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
	}


	function tampil_student_paket_siswa()
	{
		$this->db->select('*');
		$this->db->from('paket_siswa');
		$this->db->join('program', 'paket_siswa.id_program = program.id_program');
		$this->db->join('paket', 'paket.id_paket = program.id_paket');
		$this->db->where('paket_siswa.id_siswa', $this->session->userdata('kd_siswa'));

		$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
	}

		function beli_paket($data)
	{
		$this->db->insert('paket_siswa', $data);
	}


	

}

/* End of file model_student.php */
/* Location: ./application/models/model_student.php */