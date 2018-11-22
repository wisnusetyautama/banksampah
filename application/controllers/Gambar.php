<?php 

class Gambar extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login') == NULL){
			redirect(base_url("Login"));
		}
	}

	function index(){
		$this->load->view('admin/gambar');
	}

	function tambahgambar(){
		$this->load->model('Model_gambar');
		$this->load->view('admin/gambar', $this->data);
	}

	function postgambar(){		
	    if ($this->input->post("submit")) {
			$this->load->model('Model_gambar');
	        $caption = $this->input->post("caption");
	        $category = $this->input->post("category");
			$file_foto = $_FILES["image"]["name"];
			$extension = "";
			if ($file_foto != "") {
				$extension = pathinfo($file_foto, PATHINFO_EXTENSION);
			}
			if ($file_foto == "") {
				$params = array(
					"caption" => $caption,
					"category" => $category
				);
			} else {
				$file_temp = $_FILES["image"]["tmp_name"];
				$foto = file_get_contents($file_temp, true);
				if ($extension == "png") {
					$file_temp = $this->Model_gambar->png2jpg($file_temp, 50);
					$foto = file_get_contents($file_temp, true);
					$extension = "jpg";
					unlink($file_temp);
				}
				$foto = "data:image/" . $extension . ";base64," . base64_encode($foto);
				$params = array(
					"caption" => $caption,
					"category" => $category
				);
			}
			if ($this->Model_gambar->insert_gambar($params)) {
				$this->load->view('admin/gambar');
			} else {
				$this->load->view('admin/gambar');
			}
		} else {
			$this->load->view('admin/gambar');
		}
	}

	function updategambar1($id){
		$this->data["id"] = $id;
		$this->load->model('Model_gambar');
		$this->data["gambar"] = $this->Model_gambar->get_gambar($id);
		$this->load->view('admin/gambar', $this->data);
	}

	function updategambar2($id){		
	    if ($this->input->post("submit")) {
			$this->load->model('Model_gambar');
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
					"caption" => $caption,
					"category" => $category
				);
			} else {
				$file_temp = $_FILES["image"]["tmp_name"];
				$foto = file_get_contents($file_temp, true);
				if ($extension == "png") {
					$file_temp = $this->Model_gambar->png2jpg($file_temp, 50);
					$foto = file_get_contents($file_temp, true);
					$extension = "jpg";
					unlink($file_temp);
				}
				$foto = "data:image/" . $extension . ";base64," . base64_encode($foto);
				$params = array(
					"caption" => $caption,
					"category" => $category
				);
			}
			if ($this->Model_gambar->update_gambar($id, $params)) {
				$this->load->view('admin/gambar');
			} else {
				$this->load->view('admin/gambar');
			}
		} else {
			$this->load->view('admin/gambar');
		}
	}

	function deletegambar() {
		if ($this->input->post("submit")) {
			$this->load->model('Model_gambar');
	        $id = $this->input->post("id_delete");
			if ($this->Model_gambar->delete_gambar($id)) {
				$this->load->view('admin/gambar');
			} else {
				$this->load->view('admin/gambar');
			}
		} else {
			$this->load->view('admin/gambar');
		}
	}
}