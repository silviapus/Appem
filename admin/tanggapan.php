
<?php
require '../koneksi.php';
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
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<div class="card shadow">
    <div class="card-header">
        Tanggapan
    </div>

    <div class="card-body">
<div class="form-group cols-sm-6">

    <a href="?url=verifikasi_pengaduan" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
        </span>
    <span class="text">Kembali</span>
    </a>

    
    
    <form action="simpan_tanggapan.php" method="POST"  enctype="multipart/form-data">

    
    
    <input type="hidden" name="id_pengaduan" value="<?php echo $id; ?>">
    <br><br>

    <div class="form-group">
        <label style="font-size: 14px">ID Pengaduan</label>
        <input type="text" name="id_pengaduan" class="form-control"  value="<?php echo $_GET['id']; ?>"readonly >
    </div>

    <div class="form-group">
        <label style="font-size: 14px">Tgl Tanggapan</label>
        <input type="text" name="tgl_tanggapan" class="form-control" readonly  value="<?= date('Y-m-d');?>">
    </div>
    <div class="form-group">
        <label style="font-size: 14px">Tulis Tanggapan</label>
        <textarea name="tanggapan" rows="7" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label style="font-size: 14px">ID Petugas</label>
        <input type="text" name="id_petugas" value="<?php echo $_SESSION['id_petugas']; ?>" class="form-control" readonly>
    </div>

    <input type="submit" value="Tanggapi!" class="btn btn-primary btn-user">

    </div>



</form>

<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>