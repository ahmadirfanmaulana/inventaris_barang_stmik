<?php

/**
 *
 */
class ModelofInventaris extends CI_Model
{
  public function tampil()
  {
    $this->db->select('*');
    $this->db->from('data_barang');
    $this->db->join('jenis_barang','jenis_barang.jenis_barang_id = data_barang.jenis_barang_id');
    $this->db->join('dana_barang','dana_barang.dana_barang_id = data_barang.dana_barang_id');
    $sql = $this->db->get()->result_array();
    return $sql;
  }
  public function tambah()
  {
    $button = $this->input->post('button');
    $kode = $this->input->post('kode');
    $nama_barang = $this->input->post('nama_barang');
    $merek = $this->input->post('merek');
    $tahun_pengadaan = $this->input->post('tahun_pengadaan');
    $jumlah = $this->input->post('jumlah');
    $posisi_barang = $this->input->post('posisi_barang');
    $keadaan = $this->input->post('keadaan');
    $jenis_barang = $this->input->post('jenis_barang');
    $dana_barang = $this->input->post('dana_barang');

    if ($button) {
      if ($this->db->query("SELECT * FROM data_barang WHERE kode = '$kode'")->num_rows() > 0) {
        $result = "require";
      }
      else {
        $sql = $this->db->query("INSERT INTO data_barang(
          kode,
          nama_barang,
          merek,
          tahun_pengadaan,
          jumlah,
          posisi_barang,
          keadaan,
          jenis_barang_id,
          dana_barang_id
        )VALUES(
          $kode,
          '$nama_barang',
          '$merek',
          '$tahun_pengadaan',
          '$jumlah',
          '$posisi_barang',
          '$keadaan',
          '$jenis_barang',
          '$dana_barang'
        )");
        if ($sql) {
          $result = "berhasil";
        }
        else {
          $result = "gagal";
        }
      }

      return $result;
    }
  }
  public function tampil_where($id)
  {
    $this->db->select('*');
    $this->db->from('data_barang');
    $this->db->join('jenis_barang','jenis_barang.jenis_barang_id = data_barang.jenis_barang_id');
    $this->db->join('dana_barang','dana_barang.dana_barang_id = data_barang.dana_barang_id');
    $this->db->where('kode',$id);
    $sql = $this->db->get()->result_array();
    return $sql;
  }
  public function edit($id)
  {
    // $data = array(
    //               'kode' => $this->input->post('kode'),
    //               'nama_barang' => $this->input->post('nama_barang'),
    //               'merek' =>
    //             );
    $button = $this->input->post('button');
    $kode = $this->input->post('kode');
    $nama_barang = $this->input->post('nama_barang');
    $merek = $this->input->post('merek');
    $tahun_pengadaan = $this->input->post('tahun_pengadaan');
    $jumlah = $this->input->post('jumlah');
    $posisi_barang = $this->input->post('posisi_barang');
    $keadaan = $this->input->post('keadaan');
    $jenis_barang = $this->input->post('jenis_barang');
    $dana_barang = $this->input->post('dana_barang');

    if ($button) {
      $sql = $this->db->query("UPDATE data_barang SET
                              kode = '$kode',
                              nama_barang = '$nama_barang',
                              merek = '$merek',
                              tahun_pengadaan = '$tahun_pengadaan',
                              jumlah = '$jumlah',
                              posisi_barang = '$posisi_barang',
                              keadaan = '$keadaan',
                              jenis_barang_id = '$jenis_barang',
                              dana_barang_id = '$dana_barang'
                              WHERE kode = $id
                              ");
      if ($sql) {
        $result = TRUE;
      }
      else {
        $result = FALSE;
      }

      return $result;
    }
  }

  public function hapus($id)
  {
    $button = $this->input->post('button');

    if ($button) {
      $sql = $this->db->query("DELETE FROM data_barang WHERE kode = $id");

      if ($sql) {
        $result = TRUE;
      }
      else {
        $result = FALSE;
      }

      return $result;
    }
  }

  public function search()
  {
    $keyword = $this->input->post('search');
    $sql = $this->db->query("SELECT * FROM data_barang WHERE nama_barang LIKE '%$keyword%'");

    return $sql;
  }

  public function jenis_barang()
  {
    $sql = $this->db->get('jenis_barang');
    return $sql->result();
  }
}


 ?>
