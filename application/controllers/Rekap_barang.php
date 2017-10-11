<?php

/**
 *
 */
class Rekap_barang extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('ModelofRekap_barang');
  }
  public function index()
  {
    $data['rekap_barang'] = 'active';

    $this->load->view('common/meta');
    $this->load->view('common/header',$data);
    $this->load->view('rekap_barang/rekap_barang_homepage',$data);
    $this->load->view('common/footer');
  }
  public function rekap()
  {
    $data['data_rekap'] = $this->ModelofRekap_barang->rekap_all();

    $this->load->view('common/meta');
    $this->load->view('rekap_barang/rekap_barang_rekap',$data);
  }
}


 ?>
