
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
        Detail Pengaduan
    </div>

    <?php
    require '../koneksi.php';
    $sql=mysqli_query($conn, "select * from pengaduan where id_pengaduan='$_GET[id]'");
    $data=mysqli_fetch_array($sql);
    if ($sql)

    {
        ?>

    <div class="card-body">
<div class="form-group cols-sm-6">

    <a href="?url=verifikasi_pengaduan" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-arrow-left"></i>
        </span>
    <span class="text">Kembali</span>
    </a>

    
    
    <form method="POST" action="simpan_pengaduan.php" enctype="multipart/form-data">

    
    
    <div class="form-group">
        <label style="font-size: 14px">Tanggal Pengaduan</label>
        <input type="text" name="tgl_pengaduan" class="form-control" readonly  value="<?php echo  $data['tgl_pengaduan']; ?>" >
    </div>

    <div class="form-group">
        <label style="font-size: 14px">Tulis Laporan</label>
        <textarea name="isi_laporan" class="form-control" required>
            <?php echo $data ['isi_laporan']; ?>
        </textarea>
    </div>

    <div class="form-group">
        <label>Bukti Foto</label>
        <div>
        <img src="../foto/<?php echo $data['foto']; ?>" width="500">
        </div>
    </div>

    <!--
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-warning">Kosongkan</button>
    </div>
    <!-->

<?php } ?>

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