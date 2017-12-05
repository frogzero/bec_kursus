<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_paket extends CI_Model {

	function simpan_paket($data_program)
{
	$this->db->insert('paket', $data_program);
}

function tampil_program()
{

		$hasil = $this->db->get('paket');
			if($hasil->num_rows()>0){
			return $hasil->result();
			}
			else{
			return array();
			}
}

	

}

/* End of file model_paket.php */
/* Location: ./application/models/model_paket.php */