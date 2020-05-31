<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="../fontawesome/css/all.css" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Login</title>
  <style>
    .form {
      margin: 7% 40%;
      float: center;
    }
  </style>
</head>

<body>
  <div class="text-center">
    <form class="form" action="" method="post">
      <h3 style="color:DodgerBlue">REGISTER</h3>
      <div class="form-group">
        <label for="exampleInputText"><i class="fas fa-id-badge"></i> Nama Lengkap</label>
        <input type="text" name="nama" class="form-control">
      </div>
      <div class="form-group">
        <label for="exampleInputText"><i class="fas fa-user-graduate"></i> Kelas</label>
        <input type="text" name="kelas" class="form-control">
      </div>
      <div class="form-group">
        <label for="exampleInputText"><i class="fas fa-phone-alt"></i> Telp</label>
        <input type="text" name="telp" class="form-control">
      </div>
      <div class="form-group">
        <label for="exampleInputText"><i class="fas fa-user"></i> Username</label>
        <input type="text" name="username" class="form-control">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1"><i class="fas fa-lock"></i> Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary" name="simpan" value="Daftar">Daftar?</button>
    </form>
  </div>

</body>

</html>

<?php
include '../config.php';
if (@$_POST['simpan']) {
  $nama = @$_POST['nama'];
  $kelas = @$_POST['kelas'];
  $telp = @$_POST['telp'];
  $username = @$_POST['username'];
  $password = @$_POST['password'];

  $query = mysqli_query($koneksi, "INSERT INTO `t_anggota` (nama,kelas,telp,username,password) 
                    VALUES ('$nama', '$kelas','$telp','$username', '$password')");

  if ($query) {
    echo "<div>
                  <h3> Berhasil registrasi akun </h3>
                  <br/> klik untuk <a href='anggota.php'>login</a>
            </div>";
  } else {
    echo "data gagal di input";
  }
}
?>