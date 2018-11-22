<?php 

class Category extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login') == NULL){
			redirect(base_url("Login"));
		}
	}

	function index(){
		$this->load->view('admin/inputcategory');
	}

	function tambahcategory(){
		$this->load->model('Model_category');
		$this->load->view('admin/inputcategory', $this->data);
	}

	function postcategory(){
		if ($this->input->post("submit")) {
			$this->load->model('Model_category');
	        $kategori = $this->input->post("kategori");

	        $params = array(
				"kategori" => $kategori
			);
			if ($this->Model_category->insert_category($params)) {
				$this->load->view('admin/inputcategory');
			} else {
				$this->load->view('admin/inputcategory');
			}
		} else {
			$this->load->view('admin/inputcategory');
		}
	}

	function updatecategory(){
		if ($this->input->post("submit")) {
			$this->load->model('Model_category');
	        $id = $this->input->post("id_update");
	        $kategori = $this->input->post("kategori_update");
	        $params = array(
				"kategori" => $kategori
			);
			if ($this->Model_category->update_category($id, $params)) {
				$this->load->view('admin/inputcategory');
			} else {
				$this->load->view('admin/inputcategory');
			}
		} else {
			$this->load->view('admin/inputcategory');
		}
	}

	function deletecategory() {
		if ($this->input->post("submit")) {
			$this->load->model('Model_category');
	        $id = $this->input->post("id_delete");
			if ($this->Model_category->delete_category($id)) {
				$this->load->view('admin/inputcategory');
			} else {
				$this->load->view('admin/inputcategory');
			}
		} else {
			$this->load->view('admin/inputcategory');
		}
	}
}