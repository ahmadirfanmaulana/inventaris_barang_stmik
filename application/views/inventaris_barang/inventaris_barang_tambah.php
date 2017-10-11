<ul class="breadcrumb" style="padding:0px">
  <li><a href="<?php echo PATH_THEME; ?>inventaris">Data Barang</a></li>
  <li class="active">Tambah Barang</li>
</ul>

<?php
$result = isset($result) ? $result : "";
if (empty($result)) {
  # code...
}
else {
  if ($result == "berhasil") {
    ?>
    <tr>
      <td colspan="3">
        <div class="alert alert-success">
          Berhasil Ditambahkan. <a href="<?php echo PATH_THEME; ?>inventaris">Kembali</a>
        </div>
      </td>
    </tr>
    <?php
  }
  elseif ($result == "require") {
    ?>
    <tr>
      <td colspan="3">
        <div class="alert alert-danger">
          Gagal. Kode Barang sudah ada !</a>
        </div>
      </td>
    </tr>
    <?php
  }
  else {
    ?>
    <tr>
      <td colspan="3">
        <div class="alert alert-danger">
          Gagal Ditambahkan Coba Kembali !</a>
        </div>
      </td>
    </tr>
    <?php
  }
}
 ?>
<form class="" action="" method="post">
<div class="row">
  <div class="col-md-5">
    <div class="form-group">
      <label for="">Kode</label>
      <input type="number" name="kode" value="" class="form-control" required>
    </div>
  </div>
  <div class="col-md-7">
    <div class="form-group">
      <label for="">Nama Barang</label>
      <input type="text" name="nama_barang" value="" class="form-control" required>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="">Merek</label>
      <input type="text" name="merek" value="" class="form-control" required>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="">Tahun Pengadaan</label>
      <input type="date" name="tahun_pengadaan" value="" class="form-control" required>
    </div>
  </div>
  <div class="col-md-9">
    <div class="form-group">
      <label for="">Posisi Barang</label>
      <input type="text" name="posisi_barang" value="" class="form-control" required>
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label for="">Jumlah</label>
      <input type="number" name="jumlah" value="" class="form-control" required>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="">Keadaan</label>
      <select class="form-control" name="keadaan" required>
        <option value="">Pilih Keadaan</option>
        <option value="baik">Baik</option>
        <option value="sedang">Sedang</option>
        <option value="rusak">Rusak</option>
      </select>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="">Jenis Barang</label>
      <select class="form-control" name="jenis_barang" required>
        <option value="">Pilih Jenis Barang</option>
        <?php foreach ($jenisbarang as $key): ?>
          <option value="<?php echo $key->jenis_barang_id; ?>"><?php echo $key->jenis_barang_nama; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
      <label for="">Dana Barang</label>
      <select class="form-control" name="dana_barang" required>
        <option value="">Pilih Dana Barang</option>
        <?php foreach ($danabarang as $key): ?>
          <option value="<?php echo $key->dana_barang_id; ?>"><?php echo $key->dana_barang_tipe; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>

  <div class="col-md-12">
    <button type="submit" name="button" value="button" class="btn btn-primary"><i class="fa fa-upload"></i> Tambahkan</button>
  </div>

</div>

    </form>
