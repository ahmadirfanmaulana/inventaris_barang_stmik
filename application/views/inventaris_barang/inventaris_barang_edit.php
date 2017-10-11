<?php

foreach ($result as $key) {
  ?>
  <ul class="breadcrumb" style="padding:0px">
    <li><a href="<?php echo PATH_THEME; ?>inventaris">Data Barang</a></li>
    <li class="active">Edit Barang</li>
  </ul>

  <?php
  $resultprimary = isset($resultprimary) ? $resultprimary : "";
  if (empty($resultprimary)) {
    # code...
  }
  else {
    if ($resultprimary == TRUE) {
      ?>
      <div class="alert alert-success">
        Berhasil Diedit. <a href="<?php echo PATH_THEME; ?>inventaris">Kembali</a>
      </div>
      <?php
    }
    else {
      ?>
        <div class="alert alert-danger">
          Gagal Diedit Coba Kembali !</a>
        </div>
      <?php
    }
  }
   ?>

      <form class="" action="" method="post">

        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
              <label for="">Kode</label>
              <input type="number" name="kode" value="<?php echo $key['kode']; ?>" class="form-control" required readonly>
            </div>
          </div>
          <div class="col-md-7">
            <div class="form-group">
              <label for="">Nama Barang</label>
              <input type="text" name="nama_barang" value="<?php echo $key['nama_barang']; ?>" class="form-control" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Merek</label>
              <input type="text" name="merek" value="<?php echo $key['merek']; ?>" class="form-control" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Tahun Pengadaan</label>
              <input type="date" name="tahun_pengadaan" value="<?php echo $key['tahun_pengadaan']; ?>" class="form-control" required>
            </div>
          </div>
          <div class="col-md-9">
            <div class="form-group">
              <label for="">Posisi Barang</label>
              <input type="text" name="posisi_barang" value="<?php echo $key['posisi_barang']; ?>" class="form-control" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="">Jumlah</label>
              <input type="number" name="jumlah" value="<?php echo $key['jumlah']; ?>" class="form-control" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Keadaan</label>
              <select class="form-control" name="keadaan" required>
                <option value="<?php echo $key['keadaan']; ?>"><?php echo $key['keadaan']; ?></option>
                <?php

                $kondisi = array('baik','sedang','rusak');
                for ($i=0; $i < 3 ; $i++) {
                  if ($kondisi[$i] == $key['keadaan']) {
                    # code...
                  }
                  else {
                    ?>
                    <option value="<?php echo $kondisi[$i]; ?>"><?php echo $kondisi[$i]; ?></option>
                    <?php
                  }
                }
                 ?>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Jenis Barang</label>
              <select class="form-control" name="jenis_barang" required>
                <option value="<?php echo $key['jenis_barang_id']; ?>"><?php echo  $key['jenis_barang_nama']; ?></option>
                <?php foreach ($jenis_barang as $keys){
                  if ($keys->jenis_barang_nama == $key['jenis_barang_nama']){

                  }
                  else {
                    ?>
                    <option value="<?php echo $keys->jenis_barang_id; ?>"><?php echo $keys->jenis_barang_nama; ?></option>
                    <?php
                    }
                  }
                  ?>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="">Dana Barang</label>
              <select class="form-control" name="dana_barang" required>
                <option value="<?php echo $key['dana_barang_id']; ?>"><?php echo  $key['dana_barang_tipe']; ?></option>
                <?php foreach ($dana_barang as $keys){
                  if ($keys->dana_barang_tipe == $key['dana_barang_tipe']){

                  }
                  else {
                    ?>
                    <option value="<?php echo $keys->dana_barang_id; ?>"><?php echo $keys->dana_barang_tipe; ?></option>
                    <?php
                    }
                  }
                  ?>
              </select>
            </div>
          </div>

          <div class="col-md-12">
            <button type="submit" name="button" value="button" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</button>
          </div>

        </div>


      </form>

  <?php
}

 ?>
