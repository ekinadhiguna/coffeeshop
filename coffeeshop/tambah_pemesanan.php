<?php

include "koneksi.php";

if (isset($_POST['bsimpan'])){
  $simpan = mysqli_query($koneksi, "INSERT INTO pesanan (namapelanggan) VALUE ('$_POST[tnama]')" );

  if($simpan){
    echo "<script>alert('Tambah pesanan sukses');
          document.location='kasir.php';
          </script>";
  }else{
    echo "<script>alert('Tambah pesanan gagal');
    document.location='kasir.php';
    </script>";
  }
}
?>