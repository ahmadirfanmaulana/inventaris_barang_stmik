<div class="jumbotron text-center">
  <h1>Login</h1>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <?php
      if (empty(isset($result) ? $result : "")) {
        # code...
      }
      else {
        if ($result == "gagal") {
          ?>
          <div class="alert alert-danger">
            <i class="fa fa-warning"></i> Username dan Password salah. Silahkan Coba Kembali !
          </div>
          <?php
        }
      }
       ?>
      <form class="" action="" method="post">
        <input type="text" name="username" value="" class="form-control" placeholder="Nama Pengguna" required><br>
        <input type="password" name="password" value="" class="form-control" placeholder="Kata Sandi" required><br>
        <button type="submit" value="button" name="button" class="btn btn-primary">Masuk <i class="fa fa-sign-in"></i></button>
      </form>
    </div>
  </div>
</div>
