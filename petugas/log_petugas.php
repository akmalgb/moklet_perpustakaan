<?php
include '../config.php';

$username = ($_POST['username']);
$password = ($_POST['password']);

$query = "SELECT * FROM t_petugas WHERE username = '$username' AND password = '$password'";
$sql   = mysqli_query($koneksi, $query);

if ($sql->num_rows > 0) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: user_petugas.php");
} else {
    echo "<div>
            <h1> Username atau Password anda salah! </h1>
          </div>";

    echo "<div class='form'>
                <h3>
                    Klik untuk <a href='petugas.php'>Login Lagi</a>
                </h3>        
            </div>";
}
