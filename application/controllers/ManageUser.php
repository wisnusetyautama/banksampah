<?php 

class ManageUser extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('login') == NULL){
			redirect(base_url("Login"));
		}
	}

	function index(){
		$this->data["txt_kata_sandi_lama"] = "";
		$this->data["txt_kata_sandi_baru"] = "";
		$this->data["txt_konfirmasi_kata_sandi_baru"] = "";
		$this->load->view("admin/manageuser", $this->data);
	}

		public function proses() {
			if ($this->input->post("btn_simpan")) {
				$this->load->model("Model_User");
				$id = $this->session->userdata("login")->id_user;
				$txt_kata_sandi_lama = $this->input->post("txt_kata_sandi_lama");
				$txt_kata_sandi_baru = $this->input->post("txt_kata_sandi_baru");
				$txt_konfirmasi_kata_sandi_baru = $this->input->post("txt_konfirmasi_kata_sandi_baru");
				
				// proteksi
				if ($txt_kata_sandi_lama == "") {
					$error["txt_kata_sandi_lama"] = "Kata Sandi Lama tidak boleh kosong";
				} else if ($this->user_model->login($id_user, $txt_kata_sandi_lama) == NULL) {
					$error["txt_kata_sandi_lama"] = "Kata Sandi Lama tidak benar";
				}
				if ($txt_kata_sandi_baru == "") {
					$error["txt_kata_sandi_baru"] = "Kata Sandi Baru tidak boleh kosong";
				} else if (strlen($txt_kata_sandi_baru) < 4 || strlen($txt_kata_sandi_baru) > 20) {
					$error["txt_kata_sandi_baru"] = "Kata Sandi hanya boleh 4 s/d 20 karakter";
				}
				if ($txt_konfirmasi_kata_sandi_baru == "") {
					$error["txt_konfirmasi_kata_sandi_baru"] = "Konfirmasi Kata Sandi Baru tidak boleh kosong";
				} else if ($txt_konfirmasi_kata_sandi_baru != $txt_kata_sandi_baru) {
					$error["txt_konfirmasi_kata_sandi_baru"] = "Konfirmasi Kata Sandi Baru tidak benar";
				}
				// end proteksi
				
				if (!isset($error["txt_kata_sandi_lama"]) && !isset($error["txt_kata_sandi_baru"]) && !isset($error["txt_konfirmasi_kata_sandi_baru"])) {
					$params = array(
						"password" => md5($txt_kata_sandi_baru)
					);
					if ($this->user_model->update_user($id, $params)) {
						$error["form_ubah_judul"] = "Sukses";
						$error["form_ubah_warna"] = "success";
						$error["form_ubah_icon"] = "check";
						$error["form_ubah"] = "Kata sandi telah berhasil diubah.";
						$txt_kata_sandi_lama = "";
						$txt_kata_sandi_baru = "";
						$txt_konfirmasi_kata_sandi_baru = "";
					} else {
						$error["form_ubah_judul"] = "Gagal";
						$error["form_ubah_warna"] = "danger";
						$error["form_ubah_icon"] = "close";
						$error["form_ubah"] = "Terjadi kesalahan saat proses data, silahkan coba lagi nanti.";
					}
				}
				$this->data["txt_kata_sandi_lama"] = $txt_kata_sandi_lama;
				$this->data["txt_kata_sandi_baru"] = $txt_kata_sandi_baru;
				$this->data["txt_konfirmasi_kata_sandi_baru"] = $txt_konfirmasi_kata_sandi_baru;
				$this->data["error"] = $error;
				$this->load->view("admin/manageuser", $this->data);
			} else {
				redirect(site_url("admin/manageuser"));
			}
		}
}