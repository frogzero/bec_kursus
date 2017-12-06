<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kelas extends CI_Model {

function tampil_kelas()
	{
		$this->db->select('*');
		$this->db->from('kelas');
		$this->db->join('paket', 'paket.id_paket = kelas.id_paket');
		$this->db->join('program', 'program.id_paket = paket.id_paket');
		$this->db->group_by('id_kelas');

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
	$this->db->insert('kelas', $data);
}

function tampil_kelas_ubah($id_jadwal)
	{
		$this->db->select('*');
		$this->db->from('jadwal');
		$this->db->where('id_jadwal', $id_jadwal);

		$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
	}
	

}

/* End of file model_kelas.php */
/* Location: ./application/models/model_kelas.php */