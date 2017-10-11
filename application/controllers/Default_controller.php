<?php
/**
 *
 */
class Default_controller extends CI_Controller
{
  public function override()
  {
    $this->load->view('common/meta');
    $this->load->view('common/header');
    $this->load->view('common/notfound');
    $this->load->view('common/footer');
  }
  public function tentang()
  {
    if (empty($this->session->userdata('user_id'))) {
      redirect(PATH_THEME."404_override");
    }
    $this->load->view('common/meta');
    $this->load->view('common/header');
    $this->load->view('tentang_perusahaan/tentang_perusahaan_homepage');
    $this->load->view('common/footer');
  }
  public function login()
  {
    if (!empty($this->session->userdata('user_id'))) {
      redirect(PATH_THEME."404_override");
    }

    $this->load->model('ModelofLogin');
    $data['result'] = $this->ModelofLogin->login();

    $this->load->view('common/meta');
    $this->load->view('common/login',$data);
    $this->load->view('common/footer');
  }
  public function logout()
  {
    if (empty($this->session->userdata('user_id'))) {
      redirect(PATH_THEME."404_override");
    }
    $this->load->model('ModelofLogin');
    $this->ModelofLogin->logout();
  }
}

 ?>
