<?php 

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Model_Home');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		}
	

	function index(){
		$this->load->view('front/indexs');
	}

	function animation(){
		$this->load->view('front/animate');
	}
	
	public function galer(){
		$this->load->view('front/gallery');
	}

	public function bloging(){
		$this->load->view('front/blog');
	}
}
?>