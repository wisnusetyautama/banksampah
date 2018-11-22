<?php
class Login extends CI_Controller{

 function __construct(){
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('pagination');
 }

 function index(){
    if ($this->session->userdata("login") != NULL) {
        redirect(base_url("admin"));
    }
    $this->load->view('front/login');
 }

 function cek_login(){
    if ($this->session->userdata("login") != NULL) {
        redirect(base_url("admin"));
    }
    if ($this->input->post("submit")) {
        $this->load->model("Model_login");
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $admin = $this->Model_login->ceklogin($username, $password);
        if ($admin == NULL) {
          $this->data["error"] = true;
          $this->data["username"] = $username;
          $this->load->view("front/login", $this->data);
        } else {
          $this->session->set_userdata("login", $admin);
          redirect(site_url("Admin"));
        }
    } else {
        redirect(site_url("Login"));
    }
  }

  function logout(){
      $this->session->unset_userdata("login");
      redirect(base_url('Welcome'));
  }
}
?>