<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_paket_siswa extends CI_Model {

	function tampil_student_paket_siswa()
	{
		$this->db->select('*');
		$this->db->from('paket_siswa');
		$this->db->join('program', 'paket_siswa.id_program = program.id_program');
		$this->db->join('paket', 'paket.id_paket = program.id_paket');
		$this->db->join('siswa', 'siswa.id_siswa = paket_siswa.id_siswa');

		$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
	}

	function simpan_paket_siswa($data)
	{
		$this->db->insert('paket_siswa', $data);
	}

	

}

/* End of file model_paket_siswa.php */
/* Location: ./application/models/model_paket_siswa.php */