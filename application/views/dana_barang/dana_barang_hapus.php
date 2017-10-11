<ul class="breadcrumb" style="padding:0px">
  <li><a href="<?php echo PATH_THEME; ?>jenis_barang">Dana Barang</a></li>
  <li class="active">Hapus Dana Barang</li>
</ul>

          <?php
          $delete_jb = isset($delete_jb) ? $delete_jb : "";
          if (empty($delete_jb)) {
            ?>
              <h4>Konfirmasi Penghapusan</h4>
              <?php foreach ($get_where_jb as $key): ?>
                Apakah anda ingin menghapus <?php echo $key->dana_barang_tipe ; ?> ?
              <?php endforeach; ?>
              <br><br>
            <?php
          }
          else {
            if ($delete_jb == "berhasil") {
              ?>
              <div class="alert alert-success">
                Berhasil Dihapus. <a href="<?php echo PATH_THEME; ?>dana_barang">Kembali</a>
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
      if (empty($delete_jb)) {
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
