<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//$this->load->model(array('model_komentar','model_produk','model_kategori','model_web','model_konsumen','model_pesanan','model_slider','model_stok'));
		$this->load->library('cart');
		$this->load->helper(array('form', 'url'));  
	}

	public function index()
	{
		$this->load->view('web_view/index');
		$this->load->view('web_view/header');
		$this->load->view('web_view/navbar');
		$this->load->view('web_view/content');
		$this->load->view('web_view/footer');	
	}

}

/* End of file home_admin.php */
/* Location: ./application/controllers/admin/home_admin.php */