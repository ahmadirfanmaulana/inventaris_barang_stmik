<?php

/**
 *
 */
class ModelofRekap_barang extends CI_Model
{
  public function rekap_all()
  {
    $this->db->select('*');
    $this->db->from('data_barang');
    $this->db->join('jenis_barang','jenis_barang.jenis_barang_id = data_barang.jenis_barang_id');
    $this->db->join('dana_barang','dana_barang.dana_barang_id = data_barang.dana_barang_id');
    return $this->db->get()->result();
  }
}


 ?>
