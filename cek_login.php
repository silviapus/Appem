<?php
require 'koneksi.php';
$user=$_POST['username'];
$pass=$_POST['password'];
$sql=mysqli_query($conn, "select * from masyarakat where username='$user' and password='$pass' ");
$cek=mysqli_num_rows($sql);

    if ($cek>0)            
    {
        session_start();
        $_SESSION['nama']=$user;
        $p = $cek['nik'];
        $_SESSION['nik']=$cek['nik'];
        header('location:masyarakat.php'); 
    }
    else
    {
        ?> 
    <script type="text/javascript">
        alert ('Username Atau Password tidak ditemukan');
        window.location="index.php";
    </script>
    <?php
    }
    ?>

