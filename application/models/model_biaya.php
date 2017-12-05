<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_biaya extends CI_Model {

function tampil_biaya()
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
public function simpan_biaya($data_biaya)
{
	$this->db->insert('program', $data_biaya);
}

	

}

/* End of file model_biaya.php */
/* Location: ./application/models/model_biaya.php */