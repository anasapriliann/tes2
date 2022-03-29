<?php
  Require "proses/aksi.php"
  session_start()
  if(isset($_SESSION['user'])){
    header("location = login.php")
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <div class="card shadow-lg mt-5">
        <div class="card-body">
    <h5 class="card-title">Registrasi Akun</h15>

    <form class="mt-3" method="post" action="">
  <div class="form-group">
    <label for="nama">Nama Lengkap</label>
    <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nama" placeholder="Masukan nama lengkap">
  </div>
  <div class="form-group">
    <label for="nama">Username</label>
    <input type="text" class="form-control" name="username" id="username" aria-describedby="username" placeholder="Masukan username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control"  name="password" id="password" placeholder="Masukan Password">
  </div>
  <div class="form-group">
    <label for="password">Ulangi Password</label>
    <input type="password" class="form-control" name="password2" id="password2" placeholder="Ulangi Password">
  </div>
  <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
</form>
<p class="mt-3">sudah punya akun?</p>
<a href="login.php" class="btn btn-success">Login</a>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>