<ul class="breadcrumb" style="padding:0px">
  <li><a href="<?php echo PATH_THEME; ?>inventaris">Data Barang</a></li>
  <li class="active">Detail Barang</li>
</ul>

<table class="table table-striped">
  <?php

  foreach ($barang as $row) {
    ?>
    <tr>
      <td>Kode</td>
      <td class="text-center">:</td>
      <td><?php echo $row->kode; ?></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td class="text-center">:</td>
      <td><?php echo $row->nama_barang; ?></td>
    </tr>
    <tr>
      <td>Merek</td>
      <td class="text-center">:</td>
      <td><?php echo $row->merek; ?></td>
    </tr>
    <tr>
      <td>Tahun Pengadaan</td>
      <td class="text-center">:</td>
      <td><?php echo $row->tahun_pengadaan; ?></td>
    </tr>
    <tr>
      <td>Jumlah</td>
      <td class="text-center">:</td>
      <td><?php echo $row->jumlah; ?> Unit</td>
    </tr>
    <tr>
      <td>Posisi Barang</td>
      <td class="text-center">:</td>
      <td><?php echo $row->posisi_barang; ?></td>
    </tr>
    <tr>
      <td>Keadaan</td>
      <td class="text-center">:</td>
      <td><?php echo $row->keadaan; ?></td>
    </tr>
    <tr>
      <td>Jenis Barang</td>
      <td class="text-center">:</td>
      <td><?php echo $row->jenis_barang_nama; ?></td>
    </tr>
    <tr>
      <td>Dana Barang</td>
      <td class="text-center">:</td>
      <td><?php echo $row->dana_barang_tipe; ?></td>
    </tr>
    <?php
  }

   ?>
</table>
