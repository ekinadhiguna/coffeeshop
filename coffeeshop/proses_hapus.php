<?php
include 'koneksi.php';
$idp = $_GET["idp"];

    $query = "DELETE FROM produk WHERE idp='$idp' ";
    $hasil_query = mysqli_query($koneksi, $query);

    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='tampil_barang.php';</script>";
    }
?>