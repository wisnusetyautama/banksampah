<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login') == NULL){
			redirect(base_url("Login"));
		}
	}

	function index(){
		$this->load->view('admin/index');
	}
}