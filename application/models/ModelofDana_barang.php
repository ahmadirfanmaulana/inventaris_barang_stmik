<?php

/**
 *
 */
class ModelofDana_barang extends CI_Model
{
  public function get_jb()
  {
    $sql = $this->db->get('dana_barang');
    return $sql->result();
  }
  public function add($value='')
  {
    $data = array(
                'dana_barang_tipe' => $this->input->post('dana_barang_tipe')
              );
    if ($this->input->post('button')) {
      $sql = $this->db->insert('dana_barang',$data);

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
    $this->db->where('dana_barang_id',$id);
    $sql = $this->db->get('dana_barang');
    return $sql->result();
  }
  public function delete_jb($id)
  {
    if ($this->input->post('button')) {
      $this->db->where('dana_barang_id',$id);
      $sql = $this->db->delete('dana_barang');

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
                'dana_barang_tipe' => $this->input->post('dana_barang_tipe')
              );
    if ($this->input->post('button')) {
      $this->db->where('dana_barang_id',$id);
      $sql = $this->db->update('dana_barang',$data);

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
