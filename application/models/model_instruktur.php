<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_instruktur extends CI_Model {
	
	function tampil_instruktur()
	{

		$this->db->select('*'); 
	    $this->db->from('instruktur');
			$hasil = $this->db->get();
				if($hasil->num_rows()>0){
				return $hasil->result();
				}
				else{
				return array();
				}
	}

	function simpan_instruktur($data_instruktur)
	{
		$this->db->insert('instruktur', $data_instruktur);
	}
	function tampil_jadwal_instruktur()
	{
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->join('instruktur', 'instruktur.id_instruktur = jadwal.id_instruktur');
		$this->db->join('siswa', 'siswa.id_siswa = jadwal.id_siswa');
		$this->db->join('kelas', 'kelas.id_kelas = jadwal.id_kelas');
		$this->db->join('paket', 'paket.id_paket = kelas.id_paket', 'left');
		$this->db->where('jadwal.id_instruktur', $this->session->userdata('id_instruktur'));

		$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
	}


	

}

/* End of file model_instruktur.php */
/* Location: ./application/models/model_instruktur.php */