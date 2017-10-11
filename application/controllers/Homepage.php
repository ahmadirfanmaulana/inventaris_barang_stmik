<?php

/**
 *
 */
class Homepage extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if (empty($this->session->userdata('user_id'))) {
      redirect(PATH_THEME."login");
    }
  }

  public function index()
  {
    $data['dashboard'] = 'active';
    $data['jumlah_barang'] = $this->db->get('data_barang')->num_rows();
    $data['jenis_barang'] = $this->db->get('jenis_barang')->num_rows();
    $data['dana_barang'] = $this->db->get('dana_barang')->num_rows();
    $data['users'] = $this->db->get('user')->num_rows();

    $this->load->view('common/meta');
    $this->load->view('common/header',$data);
    $this->load->view('homepage/homepage');
    $this->load->view('common/footer');
  }
}


 ?>
