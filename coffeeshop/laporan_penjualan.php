<?php
include "koneksi.php";
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laporan Data Penjualan</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="  plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="  plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="  plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="  plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="  dist/css/adminlte.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<?php
  session_start();

  if($_SESSION['level']==""){
    header("location:login.php?pesan=gagal");
  }
?>

<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <a href="#" class="brand-link">
        <img src="dist/img/Logo.png" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Sans Coffee</span>
      </a>
    </div>
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Just an ordinary Coffee Shop</a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="tampil_barang.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
                <p>
                  Menu
                </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="laporan_pemesanan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pemesanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="laporan_penjualan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Penjualan</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Penjualan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga Satuan</th>
                    <th>Jumlah</th>
                    <th>Sub-total</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  include 'koneksi.php';
                  $no = 1;
                  $data = mysqli_query($koneksi,"select * from detailpesanan p, produk pr where p.idp=pr. idp");
                  while($d = mysqli_fetch_array($data)){
                    $idp = $d['idp'];
                    $iddp = $d['iddp'];
                    $qty = $d['qty'];
                    $harga = $d['harga_jual'];
                    $subtotal = $qty * $harga;
                  ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['nama_produk']; ?></td>
                      <td>Rp <?= number_format($harga)?></td>
                      <td><?=$qty?></td>
                      <td>Rp <?= number_format($subtotal)?></td>
                    </tr>
                    
                  <?php
                  }
                  ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<script src="  plugins/jquery/jquery.min.js"></script>
<script src="  plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="  plugins/datatables/jquery.dataTables.min.js"></script>
<script src="  plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="  plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="  plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="  plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="  plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="  plugins/jszip/jszip.min.js"></script>
<script src="  plugins/pdfmake/pdfmake.min.js"></script>
<script src="  plugins/pdfmake/vfs_fonts.js"></script>
<script src="  plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="  plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="  plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="  dist/js/adminlte.min.js"></script>
<script src="  dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>