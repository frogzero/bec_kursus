<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_program extends CI_Model {

function simpan_program($data_biaya)
{
	$this->db->insert('program', $data_biaya);
}

function tampil_program()
{

	$this->db->select('*'); 
    $this->db->from('paket');
    $this->db->join('program', 'paket.id_paket = program.id_paket'); 
		$hasil = $this->db->get();
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
}


	

}

/* End of file model_program.php */
/* Location: ./application/models/model_program.php */