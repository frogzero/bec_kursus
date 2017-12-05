<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

	function tampil_siswa_baru()
{
$this->db->select('*'); 
    $this->db->from('siswa');
    $this->db->where('status', 'baru');
		$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
}

function tampil_siswa_aktif()
{
$this->db->select('*'); 
    $this->db->from('siswa');
    $this->db->where('status', 'aktif');
		$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
}



	

}

/* End of file model_admin.php */
/* Location: ./application/models/model_admin.php */