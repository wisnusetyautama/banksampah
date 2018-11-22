<?php 

class Gallery extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Model_blog');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		
	}

	public function index(){
		$this->load->view('front/gallery');
	}
}