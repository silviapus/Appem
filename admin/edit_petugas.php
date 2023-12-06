
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
        Edit Data Petugas
    </div>
    <div class="card-body">

    <?php
    require '../koneksi.php';
    $sql=mysqli_query($conn, "select * from petugas where id_petugas='$_GET[id]'");
    if($data=mysqli_fetch_array($sql))
    {
        ?>
    <form method="POST" action="update_petugas.php" enctype="multipart/form-data">
    
    <div class="form-group">
        <label style="font-size: 14px">ID Petugas</label>
        <input type="text" name="id_petugas" class="form-control" value="<?php echo $data ['id_petugas']; ?>" readonly>
    </div>

    <div class="form-group">
        <label style="font-size: 14px">Nama Petugas</label>
        <input type="text" name="nama_petugas" class="form-control" value="<?php echo $data ['nama_petugas']; ?>" >
    </div>

    <div class="form-group">
        <label style="font-size: 14px">Username</label>
        <input type="text" name="username" class="form-control" value="<?php echo $data ['username']; ?>" >
    </div>

    <div class="form-group">
        <label style="font-size: 14px">Password</label>
        <input type="text" name="password" class="form-control" value="<?php echo $data ['password']; ?>" >
    </div>

    <div class="form-group">
        <label style="font-size: 14px">Telp</label>
        <input type="text" name="telp" class="form-control" value="<?php echo $data ['telp']; ?>" >
    </div>

    <div class="form-group">
        <label>Level</label>
        <select class="form-control" name="level">
            <option value="<?php echo $data ['level']; ?>"><?php echo $data ['level']; ?></option>
            <option value="admin">Admin</option>
            <option value="petugas">Petugas</option>
        </select>

    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Edit Data</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>

</form>
    <?php } ?>

<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>