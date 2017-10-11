<ul class="breadcrumb" style="padding:0px">
  <li><a href="<?php echo PATH_THEME; ?>dana_barang">Dana Barang</a></li>
  <li class="active">Dana Jenis Barang</li>
</ul>
<?php
  if (!empty(isset($add))) {
    if ($add == "berhasil") {
      ?>
      <div class="alert alert-success">
        Berhasil Ditambahkan. <a href="<?php echo PATH_THEME; ?>dana_barang">Kembali</a>
      </div>
      <?php
    }
    else {
      ?>
      <div class="alert alert-danger">
        Gagal Ditambahkan! Silahkan coba kembali. atau <a href="<?php echo PATH_THEME; ?>dana_barang">Kembali</a>
      </div>
      <?php
    }
  }
 ?>
<div class="row">
  <form class="" action="" method="post">
    <div class="col-md-12">
      <div class="form-group">
        <label for="">Dana Barang</label>
        <input type="text" name="dana_barang_tipe" value="" class="form-control" placeholder="Isikan Dana Barang">
      </div>
    </div>
    <div class="col-md-12">
      <button type="submit" name="button" class="btn btn-primary" value="button">Tambah</button>
    </div>
  </form>
</div>
