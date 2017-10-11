<?php

/**
 *
 */
class ModelofJenis_barang extends CI_Model
{
  public function get_jb()
  {
    $sql = $this->db->get('jenis_barang');
    return $sql->result();
  }
  public function add($value='')
  {
    $data = array(
                'jenis_barang_nama' => $this->input->post('jenis_barang_tipe')
              );
    if ($this->input->post('button')) {
      $sql = $this->db->insert('jenis_barang',$data);

      if ($sql) {
        return "berhasil";
      }
      else {
        return "gagal";
      }

    }
  }
  public function get_where_jb($id)
  {
    $this->db->where('jenis_barang_id',$id);
    $sql = $this->db->get('jenis_barang');
    return $sql->result();
  }
  public function delete_jb($id)
  {
    if ($this->input->post('button')) {
      $this->db->where('jenis_barang_id',$id);
      $sql = $this->db->delete('jenis_barang');

      if ($sql) {
        return "berhasil";
      }
      else {
        return "gagal";
      }
    }
  }
  public function edit($id)
  {
    $data = array(
                'jenis_barang_nama' => $this->input->post('jenis_barang_tipe')
              );
    if ($this->input->post('button')) {
      $this->db->where('jenis_barang_id',$id);
      $sql = $this->db->update('jenis_barang',$data);

      if ($sql) {
        return "berhasil";
      }
      else {
        return "gagal";
      }

    }
  }
}


 ?>
