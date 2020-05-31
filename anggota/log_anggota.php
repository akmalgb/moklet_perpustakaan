<?php
include '../config.php';

$username = ($_POST['username']);
$password = ($_POST['password']);

$query = "SELECT * FROM t_anggota WHERE username = '$username' AND password = '$password'";
$sql   = mysqli_query($koneksi, $query);

if ($sql->num_rows > 0) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: user_anggota.php");
} else {
    echo "<h1> Username atau Password anda salah! </h1>";
    echo "<div class='form'>
                <h3>
                    Klik untuk <a href='anggota.php'>Login Lagi</a>
                </h3>        
            </div>";
}
?>