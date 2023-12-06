
<?php
require 'koneksi.php';
$user = $_SESSION['nama'];
$sql=mysqli_query($conn, "select * from masyarakat where username='$user'");
$cek=mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<div class="card shadow">
    <div class="card-header">
        Tulis Pengaduan
    </div>
    <div class="card-body">
    <form method="POST" action="simpan_pengaduan.php" enctype="multipart/form-data">
    
    <div class="form-group">
        <label style="font-size: 14px">Tgl Pengaduan</label>
        <input type="text" name="tgl_pengaduan" class="form-control" readonly  value="<?= date('Y-m-d');?> " >
    </div>

    <div class="form-group">
        <label style="font-size: 14px">NIK</label>
        <input type="text" name="nik" class="form-control" readonly  value="<?php echo $cek['nik'] ?>" >
    </div>

    <div class="form-group">
        <label style="font-size: 14px">Isi Laporan</label>
        <textarea name="isi_laporan" class="form-control" required></textarea>
    </div>

    <div class="form-group">
        <label>Foto</label>
        <input type="file" required class="form-control" name="foto" accept="image/*">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
    </div>

</form>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>