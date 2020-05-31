<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: petugas.php?access_denied");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>User Page</title>

    <style>
        .welcome {
            color: #2B70B0;
            font-size: 35pt;
            font-weight: 900;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../index.php"><i class="fas fa-book-open"></i> PERPUS MOKLET</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="user_petugas.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../buku/tampil_buku.php">Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="text-center">
        <br>
        <br> 
        <h3 class="welcome"> Selamat Datang Petugas <?php echo $_SESSION['username']; ?>!</h3>
        <h4> <a href="../buku/tampil_buku.php"> Daftar Buku </a> </h4>
    </div>
</body>

</html>