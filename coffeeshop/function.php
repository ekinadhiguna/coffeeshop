<?php
if(isset($_POST['addproduk'])){
    $idp = $_POST['idp'];
    $id = $_POST['id'];
    $qty = $_POST['qty'];

    $insert = mysqli_query($koneksi, "insert into detailpesanan (id,idp,qty) values ('$id','$idp','$qty')");

    if($insert){
        header('location:view.php?id='.$id);
      }else{
        echo '
        <script>alert("Tambah pesanan gagal");
        window.location.href="view.php?id="'.$id.'
        </script>
        ';
      }
}
?>