
    <ul class="breadcrumb" style="padding:0px">
      <li><a href="<?php echo PATH_THEME; ?>inventaris">Data Barang</a></li>
      <li class="active">Hapus Barang</li>
    </ul>

          <?php
          $result = isset($result) ? $result : "";
          if (empty($result)) {
            ?>
              <h4>Konfirmasi Penghapusan</h4>
              <?php foreach ($resultview as $key): ?>
                Apakah anda ingin menghapus <?php echo $key['nama_barang']; ?> ?
              <?php endforeach; ?>
              <br><br>
            <?php
          }
          else {
            if ($result == TRUE) {
              ?>
              <div class="alert alert-success">
                Berhasil Dihapus. <a href="<?php echo PATH_THEME; ?>inventaris">Kembali</a>
              </div>
              <?php
            }
            else {
              ?>
              <div class="alert alert-danger">
                Gagal Dihapus. Coba Kembali !</a>
              </div>
              <?php
            }
          }
           ?>

      <?php
      if (empty($result)) {
        ?>
            <form class="" action="" method="post">
              <button type="submit" name="button" value="button" class="btn btn-danger"><i class="fa fa-trash"></i> Konfirmasi Penghapusan Disini</button>
            </form>
        <?php
      }
      else {
        # code...
      }
       ?>
