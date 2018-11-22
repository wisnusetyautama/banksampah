<?php 

class Video extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login') == NULL){
			redirect(base_url("Login"));
		}
	}

	function index(){
		$this->load->view('admin/video');
	}

	function tambahpost(){
		$this->load->model('Model_category');
		$this->data["listCategory"] = $this->Model_category->get_all_category();
		$this->load->view('admin/tambahpost', $this->data);
	}

	function posting(){
		if ($this->input->post("submit")) {
			$this->load->model('Model_blog');
	        $judul_post = $this->input->post("judul_post");
	        $penulis = $this->input->post("penulis");

	        $params = array(
				"judul" => $judul_post,
				"penulis" => $penulis
			);
			if ($this->Model_blog->insert_blog($params)) {
				$this->load->view('admin/manageblog');
			} else {
				$this->load->view('admin/tambahpost');
			}
		} else {
			$this->load->view('admin/tambahpost');
		}
	}
}