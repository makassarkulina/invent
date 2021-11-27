<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'dbconnect.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from tb_user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=='admin'){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['nama']     = $nama;
		$_SESSION['level'] = 'admin';
		// alihkan ke halaman dashboard admin
		header("location:menu_admin.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=='pegawai'){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['nama']     = $nama;
		$_SESSION['level'] = 'pegawai';
		// alihkan ke halaman dashboard pegawai
		header("location:rekapitulasi.php");
 
	}
}else{
	header("location:index.php?pesan=gagal");
}
 
?>