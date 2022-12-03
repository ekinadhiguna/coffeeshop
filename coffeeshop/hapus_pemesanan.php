<?php
include 'koneksi.php';
$id = $_GET["id"];

    $query = "DELETE FROM pesanan WHERE id='$id' ";
    $hasil_query = mysqli_query($koneksi, $query);

    if(!$hasil_query) {
      die ("Gagal menghapus pesanan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Pesanan berhasil dihapus.');window.location='kasir.php';</script>";
    }
?>