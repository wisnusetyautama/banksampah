<?php 

class Blog extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login') == NULL){
			redirect(base_url("Login"));
		}
	}

	function index(){
		$this->load->view('admin/manageblog');
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
			$post = $this->input->post("post");
			$category = $this->input->post("category");
			$categoryTemp = "";
			if (count($category) > 0) {
				foreach ($category as $c){ 
				    $categoryTemp .= $c . ",";
				}
				$category = $categoryTemp;
			} else {
				$category = "";
			}
			$file_foto = $_FILES["image"]["name"];
			$extension = "";
			if ($file_foto != "") {
				$extension = pathinfo($file_foto, PATHINFO_EXTENSION);
			}
			if ($file_foto == "") {
				$params = array(
					"judul" => $judul_post,
					"penulis" => $penulis,
					"post" => $post,
					"category" => $category,
					"tanggal" => date("Y-m-d")
				);
			} else {
				$file_temp = $_FILES["image"]["tmp_name"];
				$foto = file_get_contents($file_temp, true);
				if ($extension == "png") {
					$file_temp = $this->Model_blog->png2jpg($file_temp, 50);
					$foto = file_get_contents($file_temp, true);
					$extension = "jpg";
					unlink($file_temp);
				}
				$foto = "data:image/" . $extension . ";base64," . base64_encode($foto);
				$params = array(
					"judul" => $judul_post,
					"penulis" => $penulis,
					"post" => $post,
					"category" => $category,
					"foto" => $foto,
					"tanggal" => date("Y-m-d")
				);
			}
			if ($this->Model_blog->insert_blog($params)) {
				$this->load->view('admin/manageblog');
			} else {
				$this->load->view('admin/tambahpost');
			}
		} else {
			$this->load->view('admin/tambahpost');
		}
	}

	function update1($id){
		$this->data["id"] = $id;
		$this->load->model('Model_category');
		$this->data["listCategory"] = $this->Model_category->get_all_category();
		$this->load->model('Model_blog');
		$this->data["blog"] = $this->Model_blog->get_blog($id);
		$this->load->view('admin/updatepost', $this->data);
	}

	function update2($id){		
	    if ($this->input->post("submit")) {
			$this->load->model('Model_blog');
	        $judul_post = $this->input->post("judul_post");
	        $penulis = $this->input->post("penulis");
			$post = $this->input->post("post");
			$category = $this->input->post("category");
			$categoryTemp = "";
			if (count($category) > 0) {
				foreach ($category as $c){ 
				    $categoryTemp .= $c . ",";
				}
				$category = $categoryTemp;
			} else {
				$category = "";
			}
			$file_foto = $_FILES["image"]["name"];
			$extension = "";
			if ($file_foto != "") {
				$extension = pathinfo($file_foto, PATHINFO_EXTENSION);
			}
			if ($file_foto == "") {
				$params = array(
					"judul" => $judul_post,
					"penulis" => $penulis,
					"post" => $post,
					"category" => $category,
					"tanggal" => date("Y-m-d")
				);
			} else {
				$file_temp = $_FILES["image"]["tmp_name"];
				$foto = file_get_contents($file_temp, true);
				if ($extension == "png") {
					$file_temp = $this->Model_blog->png2jpg($file_temp, 50);
					$foto = file_get_contents($file_temp, true);
					$extension = "jpg";
					unlink($file_temp);
				}
				$foto = "data:image/" . $extension . ";base64," . base64_encode($foto);
				$params = array(
					"judul" => $judul_post,
					"penulis" => $penulis,
					"post" => $post,
					"category" => $category,
					"foto" => $foto,
					"tanggal" => date("Y-m-d")
				);
			}
			if ($this->Model_blog->update_blog($id, $params)) {
				$this->load->view('admin/manageblog');
			} else {
				$this->load->view('admin/manageblog');
			}
		} else {
			$this->load->view('admin/manageblog');
		}
	}

	function deleteblog() {
		if ($this->input->post("submit")) {
			$this->load->model('Model_blog');
	        $id = $this->input->post("id_delete");
			if ($this->Model_blog->delete_blog($id)) {
				$this->load->view('admin/manageblog');
			} else {
				$this->load->view('admin/manageblog');
			}
		} else {
			$this->load->view('admin/manageblog');
		}
	}
}