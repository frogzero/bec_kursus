<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {


	function login_siswa($nama,$password){
		$this->db->where('email',$nama);		
		$this->db->where('password',$password);
		$query = $this->db->get('siswa');
		if ($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}	

	function login_instruktur($nama,$password){
		$this->db->where('email_instruktur',$nama);		
		$this->db->where('password_instruktur',$password);
		$query = $this->db->get('instruktur');
		if ($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}	
	function login_admin($nama,$password){
		$this->db->where('email_admin',$nama);		
		$this->db->where('password_admin',$password);
		$query = $this->db->get('admin');
		if ($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}	

}

/* End of file model_login.php */
/* Location: ./application/models/model_login.php */