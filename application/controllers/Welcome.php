<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Model_blog');
		$this->load->model('Model_category');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		
	}

	public function index()
	{
		$this->load->view('front/indexs');
	}

	public function profil()
	{
		$this->load->view('front/profil');
	}

	public function get_all_blog() {
		//if ($this->session->userdata("status") != NULL) {
			//if ($this->session->userdata("status")->status == "login") {
				$params = $_REQUEST;
				$list_blog = $this->Model_blog->ajax_get_all_blog($params);
				$total = $this->Model_blog->ajax_get_all_total_blog($params);
				$response = array(
					"draw" => intval($params['draw']),
					"recordsTotal" => intval($total),
					"recordsFiltered" => intval($total),
					"data" => $list_blog
				);
				echo json_encode($response);
			//}
		//}
	}

	public function get_all_gambar() {
		//if ($this->session->userdata("status") != NULL) {
			//if ($this->session->userdata("status")->status == "login") {
				$params = $_REQUEST;
				$list_gambar = $this->Model_gambar->ajax_get_all_gambar($params);
				$total = $this->Model_gambar->ajax_get_all_total_gambar($params);
				$response = array(
					"draw" => intval($params['draw']),
					"recordsTotal" => intval($total),
					"recordsFiltered" => intval($total),
					"data" => $list_gambar
				);
				echo json_encode($response);
			//}
		//}
	}

	public function get_all_category() {
		//if ($this->session->userdata("status") != NULL) {
			//if ($this->session->userdata("status")->status == "login") {
				$params = $_REQUEST;
				$list_category = $this->Model_category->ajax_get_all_category($params);
				$total = $this->Model_category->ajax_get_all_total_category($params);
				$response = array(
					"draw" => intval($params['draw']),
					"recordsTotal" => intval($total),
					"recordsFiltered" => intval($total),
					"data" => $list_category
				);
				echo json_encode($response);
			//}
		//}
	}

// 	function __construct()
// 	{
// 		parent::__construct();
// 		$this->load->model('Model_login');
// 		$this->load->library('form_validation');
// 		$this->load->library('pagination');
// 	}

// 	// public function index()
// 	// {
// 	// 	$this->load->view('admin/tambahpost');
// 	// }

// public function indexlogin()
// 	{
// 		$data = array(
// 		'action' => site_url('Welcome/login/'),
// 		);
// 		$this->load->view('front/login',$data);
// 	}

// public function login()
// 	{
// 		$username = $this->input->post('username');
//         $password = $this->input->post('password');
//         $person	  = $this->input->post('person');
// 		// $this->load->model('Model_Login');
// 		if ($person == '') {
// 			redirect('Welcome/indexlogin', 'refresh');
// 		}else{
// 			if ($this->Model_login->ceklogin($username, $password, 'tb_admin', 'username',$person)) {
// 	            if ($person=='Super Admin') {
// 	            	$this->session->set_userdata('admin',$username);
// 	            	redirect('admin/index', 'refresh');
// 	            }
// 	            else if ($person=='SubAdmin') {
// 	            	$this->session->set_userdata('subadmin',$username);
// 	            	redirect('admin/index', 'refresh');
// 	            }
	            
// 	        } else {
// 	        	$this->session->set_flashdata('message', 'Username/Password Salah');
// 	        	 redirect('Welcome/indexlogin', 'refresh');
// 	            // $this->indexlogin('refresh');
// 	       		}
//        	}	
// 	}

// public function logout() {
//         $this->session->sess_destroy();
//        redirect('front/indexa', 'refresh');
//     }

// public function search_key()
//     {
// 		$this->search_Data(1 , $this->input->post('search',TRUE));
//     }
}
