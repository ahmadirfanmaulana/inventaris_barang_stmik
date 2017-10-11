<h1 class="text-center">Data Barang</h1>
<table class="table table-bordered">
  <tr>
    <th class="text-center">No</th>
    <th class="text-center">Kode</th>
    <th class="text-center">Nama Barang</th>
    <th class="text-center">Merek</th>
    <th class="text-center">Tahun Pengadaan</th>
    <th class="text-center">Jumlah</th>
    <th class="text-center">Posisi</th>
    <th class="text-center">Keadaan</th>
    <th class="text-center">Jenis Barang</th>
    <th class="text-center">Dana Barang</th>
  </tr>
  <?php
  $no = 1;
  foreach ($data_rekap as $row): ?>
  <tr>
    <th class="text-center"><?php echo $no; ?></th>
    <th class="text-center"><?php echo $row->kode; ?></th>
    <th class=""><?php echo $row->nama_barang; ?></th>
    <th class=""><?php echo $row->merek; ?></th>
    <th class="text-center"><?php echo $row->tahun_pengadaan; ?></th>
    <th class="text-center"><?php echo $row->jumlah; ?></th>
    <th class=""><?php echo $row->posisi_barang; ?></th>
    <th class="text-center"><?php echo $row->keadaan; ?></th>
    <th class=""><?php echo $row->jenis_barang_nama; ?></th>
    <th class="text-center"><?php echo $row->dana_barang_tipe; ?></th>
  </tr>
  <?php
  $no++;
  endforeach; ?>
</table>


<script type="text/javascript">
  if (!window.print()) {
    window.location = '<?php echo PATH_THEME; ?>rekap_barang';
  }
</script>
