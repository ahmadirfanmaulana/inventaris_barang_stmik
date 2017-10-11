<?php

/**
 *
 */
class Jenis_barang extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('ModelofJenis_barang');
    if (empty($this->session->userdata('user_id'))) {
      redirect(PATH_THEME."login");
    }
  }
  public function index()
  {
    $data['jenis_barang'] = 'active';
    $data['get_jb'] = $this->ModelofJenis_barang->get_jb();
    $data['user_level'] = $this->session->userdata('user_level');

    $this->load->view('common/meta');
    $this->load->view('common/header',$data);
    $this->load->view('jenis_barang/jenis_barang_homepage',$data);
    $this->load->view('common/footer');
  }
  public function tambah()
  {
    $data['jenis_barang'] = 'active';
    $data['add'] = $this->ModelofJenis_barang->add();
    if ($this->session->userdata('user_level') != "admin") {
      redirect(PATH_THEME."404_override");
    }

    $this->load->view('common/meta');
    $this->load->view('common/header',$data);
    $this->load->view('jenis_barang/jenis_barang_tambah',$data);
    $this->load->view('common/footer');
  }
  public function edit($id)
  {
    $data['jenis_barang'] = 'active';
    $data['edit'] = $this->ModelofJenis_barang->edit($id);
    $data['get_where_jb'] = $this->ModelofJenis_barang->get_where_jb($id);
    if ($this->session->userdata('user_level') != "admin") {
      redirect(PATH_THEME."404_override");
    }

    $this->load->view('common/meta');
    $this->load->view('common/header',$data);
    $this->load->view('jenis_barang/jenis_barang_edit',$data);
    $this->load->view('common/footer');
  }
  public function hapus($id)
  {
    $data['jenis_barang'] = 'active';
    $data['delete_jb'] = $this->ModelofJenis_barang->delete_jb($id);
    $data['get_where_jb'] = $this->ModelofJenis_barang->get_where_jb($id);
    if ($this->session->userdata('user_level') != "admin") {
      redirect(PATH_THEME."404_override");
    }

    $this->load->view('common/meta');
    $this->load->view('common/header',$data);
    $this->load->view('jenis_barang/jenis_barang_hapus',$data);
    $this->load->view('common/footer');
  }
}


 ?>
