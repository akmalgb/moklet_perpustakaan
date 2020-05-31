<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="../fontawesome/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Anggota</title>
  <style>
    form {
      margin: 10% 40%;
      float: center;
    }
  </style>
</head>

<body>
  <div class="text-center">
    <form action="log_anggota.php" method="post">
      <h2 style="color:#2980B9"><b>ANGGOTA</b></h2>

      <div class="form-group">
        <label for="exampleInputText"><i class="fas fa-user"></i> Username</label>
        <input type="text" name="username" class="form-control">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1"><i class="fas fa-lock"></i> Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" name="login" class="btn btn-primary" value="login">Login</button>
      <button type="submit" class="btn btn-primary bg-light"><a href="reg_anggota.php">Daftar?</a></button>
    </form>
  </div>
</body>

</html>