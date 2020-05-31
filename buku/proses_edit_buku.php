<?php
include('../config.php');

$id_buku = @$_GET['id_buku'];

    $judul      = @$_POST['judul'];
    $penerbit   = @$_POST['penerbit'];
    $pengarang  = @$_POST['pengarang'];
    $ringkasan  = @$_POST['ringkasan'];
    $cover      = @$_POST['cover'];
    $stok       = @$_POST['stok'];


$sql = mysqli_query($koneksi, "UPDATE t_buku SET 
    judul='$judul', 
    penerbit='$penerbit', 
    pengarang='$pengarang', 
    ringkasan='$ringkasan', 
    cover='$cover', 
    stok='$stok'  where id_buku='$id_buku'");
if ($sql) {
    echo '<script>alert("Berhasil menyimpan data."); document.location="tampil_buku.php?id_buku=' .$id_buku. '";</script>';
} else {
    echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
}
    // header('location:tampil_buku.php');
