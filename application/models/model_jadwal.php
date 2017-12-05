<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jadwal extends CI_Model {

	function tampil_jadwal()
	{
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->join('instruktur', 'instruktur.id_instruktur = jadwal.id_instruktur');
		$this->db->join('siswa', 'siswa.id_siswa = jadwal.id_siswa');
		$this->db->join('kelas', 'kelas.id_kelas = jadwal.id_kelas');
		$this->db->group_by('jadwal.id_kelas');

		$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
	}

	
	function simpan($data)
	{
		$this->db->insert('jadwal', $data);
	}

	

}

/* End of file model_jadwal.php */
/* Location: ./application/models/model_jadwal.php */