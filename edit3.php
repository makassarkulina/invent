<?php
//include('dbconnected.php');
include('dbconnect.php');

$typeuser = $_COOKIE['level'];

$id = $_GET['id_inventory'];
$nama_barang = $_GET['nama_barang'];
$kode_barcode = $_GET['kode_barcode'];
$wh1 = $_GET['wh1'];
$wh2 = $_GET['wh2'];
$wh3 = $_GET['wh3'];
$wh4 = $_GET['wh4'];
$wh5 = $_GET['wh5'];
$wh6 = $_GET['wh6'];
$wh7 = $_GET['wh7'];
$wh8 = $_GET['wh8'];
$quantity = $_GET['wh1']+$_GET['wh2']+$_GET['wh3']+$_GET['wh4']+$_GET['wh5']+$_GET['wh6']+$_GET['wh7']+$_GET['wh8'];
//$sap = $_GET['sap'];
$selisih = $_GET['sap'] - $quantity;


	$query_stok = ($con, "SELECT * FROM stok_opname where id_inventory='$id'");
	while ($hasil = mysqli_fetch_array ($query_stok)) {
	$sap=$hasil["sap"];
	}

//query update
$query = "UPDATE stok_opname SET id_inventory='$id' , nama_barang='$nama_barang' , kode_barcode='$kode_barcode' , wh1='$wh1', wh2='$wh2', wh3='$wh3', wh4='$wh4', wh5='$wh5', wh6='$wh6', wh7='$wh7', wh8='$wh8', quantity='$quantity', selisih='$selisih' WHERE id_inventory='$id' ";

if (mysqli_query($conn, $query)) {
	

	if ($typeuser=='pegawai'){//kondisi level user
		# credirect ke page index
		header("location:rekapitulasi.php"); 
	}else if($typeuser=='admin'){
		header("location:menu_admin.php"); 	
	}//kondisi level user

}
else{
 echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>