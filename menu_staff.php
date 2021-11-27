<a href="index.php">Beranda</a> | 
<a href="rekapitulasi.php?menu=rekapitulasi">Data Rekapitulasi</a> |
<a href="logout.php">Logout</a> |
<?php 
$usr     = $_SESSION['nama'];
$username = $_SESSION['username'];

echo "Selamat Datang $nama ($username) ";
?>