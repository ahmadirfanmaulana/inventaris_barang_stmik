<div class="container">
  <div class="row">
    <div class="jumbotron">
      <h1 class="text-center">Pencarian : <?php echo $search; ?></h1>
      <h3 class="text-center">Total : <?php echo "$resultrows"; ?></h3>
    </div>
    <table class="table table-striped">
      <tr>
        <td colspan="6">
          <form class="" action="" method="post">
            <div class="input-group">
              <input type="text" name="search" value="<?php echo $search; ?>" class="form-control" placeholder="Cari barang...">
              <div class="input-group-btn">
                <button type="submit" name="button" value="button" class="btn btn-info"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </td>
        <td colspan="5" class="text-right">
          <a href="<?php echo PATH_THEME; ?>inventaris/tambah">
            <button type="button" name="button" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button>
          </a>
        </td>
      </tr>
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">Kode</th>
        <th class="text-center">Nama Barang</th>
        <th class="text-center">Merek</th>
        <th class="text-center">Tahun Pengadaan</th>
        <th class="text-center">Jumlah</th>
        <th class="text-center">Posisi Barang</th>
        <th class="text-center">Keadaan</th>
        <th class="text-center">Foto</th>
        <th class="text-center">Aksi</th>
      </tr>
      <?php
      $no = 1;
      foreach ($result as $key) {
        ?>
        <tr>
          <td class="text-center"><?php echo $no; ?></td>
          <td class="text-center"><?php echo $key['kode']; ?></td>
          <td class="text-center"><?php echo $key['nama_barang']; ?></td>
          <td class="text-center"><?php echo $key['merek']; ?></td>
          <td class="text-center"><?php echo $key['tahun_pengadaan']; ?></td>
          <td class="text-center"><?php echo $key['jumlah']; ?></td>
          <td class="text-center"><?php echo $key['posisi_barang']; ?></td>
          <td class="text-center"><?php echo $key['keadaan'];?></td>
          <td class="text-center"></td>
          <td class="text-center">
            <a href="<?php echo PATH_THEME; ?>inventaris/edit/<?php echo $key['kode']; ?>">
              <button type="button" name="button" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i >Edit</button>
            </a>

            <a href="<?php echo PATH_THEME; ?>inventaris/hapus/<?php echo $key['kode']; ?>">
              <button type="button" name="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</button>
            </a>
          </td>
        </tr>
        <?php
        $no++;
      }
       ?>
    </table>
  </div>
</div>
