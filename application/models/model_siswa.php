<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_siswa extends CI_Model {

	function tampil_siswa()
	{
		$this->db->select('*'); 
    	$this->db->from('siswa');
		$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
	}

	function tampil_siswa_aktif($id_programa)
	{
		$this->db->select('*'); 
    	$this->db->from('siswa');
    	$this->db->join('paket_siswa', 'siswa.id_siswa = paket_siswa.id_siswa');
    	$this->db->where('paket_siswa.id_program', $id_programa);
    	$this->db->where('paket_siswa.status_paket', 'aktif');
		$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
	}


	

}

/* End of file model_siswa.php */
/* Location: ./application/models/model_siswa.php */