<?php

/**
 *
 */
class Inventaris extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('ModelofInventaris');
    if (empty($this->session->userdata('user_id'))) {
      redirect(PATH_THEME."login");
    }
  }
  public function index()
  {
    $data['data_barang'] = 'active';
    $data['result'] =  $this->ModelofInventaris->tampil();
    $data['id'] = $this->session->userdata('user_id');
    $data['user_level'] = $this->session->userdata('user_level');

    $this->load->view('common/meta');
    $this->load->view('common/header',$data);
    $this->load->view('inventaris_barang/inventaris_barang_homepage',$data);
    $this->load->view('common/footer');
  }
  public function tambah()
  {
    $data['data_barang'] = 'active';
    $data['result'] = $this->ModelofInventaris->tambah();
    $data['jenisbarang'] = $this->ModelofInventaris->jenis_barang();
    $data['danabarang'] = $this->db->get('dana_barang')->result();
    if ($this->session->userdata('user_level') != "admin") {
      redirect(PATH_THEME."404_override");
    }

    $this->load->view('common/meta');
    $this->load->view('common/header',$data);
    $this->load->view('inventaris_barang/inventaris_barang_tambah',$data);
    $this->load->view('common/footer');
  }
  public function edit($id = '')
  {
    $data['resultprimary'] = $this->ModelofInventaris->edit($id);
    $data['result'] = $this->ModelofInventaris->tampil_where($id);
    $data['jenis_barang'] = $this->ModelofInventaris->jenis_barang();
    $data['dana_barang'] = $this->db->get('dana_barang')->result();
    if ($this->session->userdata('user_level') != "admin") {
      redirect(PATH_THEME."404_override");
    }

    $this->load->view('common/meta');
    $this->load->view('common/header');
    $this->load->view('inventaris_barang/inventaris_barang_edit',$data);
    $this->load->view('common/footer');
  }
  public function hapus($id = '')
  {
    $data['data_barang'] = 'active';
    $data['result'] = $this->ModelofInventaris->hapus($id);
    $data['resultview'] = $this->ModelofInventaris->tampil_where($id);
    if ($this->session->userdata('user_level') != "admin") {
      redirect(PATH_THEME."404_override");
    }

    $this->load->view('common/meta');
    $this->load->view('common/header',$data);
    $this->load->view('inventaris_barang/inventaris_barang_hapus',$data);
    $this->load->view('common/footer');
  }
  public function search()
  {
    $data['data_barang'] = 'active';
    $data['result'] = $this->ModelofInventaris->search()->result_array();
    $data['resultrows'] = $this->ModelofInventaris->search()->num_rows();
    $data['search'] = $this->input->post('search');

    $this->load->view('common/meta');
    $this->load->view('common/header',$data);
    $this->load->view('inventaris_barang/inventaris_barang_result',$data);
    $this->load->view('common/footer');
  }

  public function detail($id)
  {

    $data['data_barang'] = 'active';
    $this->db->select('*');
    $this->db->from('data_barang');
    $this->db->join('jenis_barang','jenis_barang.jenis_barang_id = data_barang.jenis_barang_id');
    $this->db->join('dana_barang','dana_barang.dana_barang_id = data_barang.dana_barang_id');
    $this->db->where('kode',$id);
    $data['barang'] = $this->db->get()->result();

    $this->load->view('common/meta');
    $this->load->view('common/header',$data);
    $this->load->view('inventaris_barang/inventaris_barang_detail',$data);
    $this->load->view('common/footer');
  }
}


 ?>
