<?php
//include('dbconnected.php');
include('dbconnect.php');

$typeuser = $_COOKIE['level'];
$id = $_GET['id_inventory'];
$tanggal = $_GET['tanggal'];
$nama_barang = $_GET['nama_barang'];
$kode_barcode = $_GET['kode_barcode'];
//gudang_a
$gud1a = $_GET ['gud1a'];
$gud1b = $_GET ['gud1b'];
$gud1c = $_GET ['gud1c'];
$gud1d = $_GET ['gud1d'];
$gud1e = $_GET ['gud1e'];
$gud1f = $_GET ['gud1f'];
$gud1g = $_GET ['gud1g'];
$gud1h = $_GET ['gud1h'];
$gud1i = $_GET ['gud1i'];
$gud1j = $_GET ['gud1j'];
//gudang_b
$gud2a = $_GET ['gud2a'];
$gud2b = $_GET ['gud2b'];
$gud2c = $_GET ['gud2c'];
$gud2d = $_GET ['gud2d'];
$gud2e = $_GET ['gud2e'];
$gud2f = $_GET ['gud2f'];
$gud2g = $_GET ['gud2g'];
$gud2h = $_GET ['gud2h'];
$gud2i = $_GET ['gud2i'];
$gud2j = $_GET ['gud2j'];
//gudang_c
$gud3a = $_GET ['gud3a'];
$gud3b = $_GET ['gud3b'];
$gud3c = $_GET ['gud3c'];
$gud3d = $_GET ['gud3d'];
$gud3e = $_GET ['gud3e'];
$gud3f = $_GET ['gud3f'];
$gud3g = $_GET ['gud3g'];
$gud3h = $_GET ['gud3h'];
$gud3i = $_GET ['gud3i'];
$gud3j = $_GET ['gud3j'];
//gudang_d
$gud4a = $_GET ['gud4a'];
$gud4b = $_GET ['gud4b'];
$gud4c = $_GET ['gud4c'];
$gud4d = $_GET ['gud4d'];
$gud4e = $_GET ['gud4e'];
$gud4f = $_GET ['gud4f'];
$gud4g = $_GET ['gud4g'];
$gud4h = $_GET ['gud4h'];
$gud4i = $_GET ['gud4i'];
$gud4j = $_GET ['gud4j'];
//gudang_e
$gud5a = $_GET ['gud5a'];
$gud5b = $_GET ['gud5b'];
$gud5c = $_GET ['gud5c'];
$gud5d = $_GET ['gud5d'];
$gud5e = $_GET ['gud5e'];
$gud5f = $_GET ['gud5f'];
$gud5g = $_GET ['gud5g'];
$gud5h = $_GET ['gud5h'];
$gud5i = $_GET ['gud5i'];
$gud5j = $_GET ['gud5j'];
//gudang_f
$gud6a = $_GET ['gud6a'];
$gud6b = $_GET ['gud6b'];
$gud6c = $_GET ['gud6c'];
$gud6d = $_GET ['gud6d'];
$gud6e = $_GET ['gud6e'];
$gud6f = $_GET ['gud6f'];
$gud6g = $_GET ['gud6g'];
$gud6h = $_GET ['gud6h'];
$gud6i = $_GET ['gud6i'];
$gud6j = $_GET ['gud6j'];
//kima
$gud7a = $_GET ['gud7a'];
$gud7b = $_GET ['gud7b'];
$gud7c = $_GET ['gud7c'];
$gud7d = $_GET ['gud7d'];
$gud7e = $_GET ['gud7e'];
$gud7f = $_GET ['gud7f'];
$gud7g = $_GET ['gud7g'];
$gud7h = $_GET ['gud7h'];
$gud7i = $_GET ['gud7i'];
$gud7j = $_GET ['gud7j'];
//butcher
$gud8a = $_GET ['gud8a'];
$gud8b = $_GET ['gud8b'];
$gud8c = $_GET ['gud8c'];
$gud8d = $_GET ['gud8d'];
$gud8e = $_GET ['gud8e'];
$gud8f = $_GET ['gud8f'];
$gud8g = $_GET ['gud8g'];
$gud8h = $_GET ['gud8h'];
$gud8i = $_GET ['gud8i'];
$gud8j = $_GET ['gud8j'];

$wh1 = $_GET['gud1a'] + $_GET['gud1b'] + $_GET['gud1c'] + $_GET['gud1d'] + $_GET['gud1e'] + $_GET['gud1f'] + $_GET['gud1g'] + $_GET['gud1h'] + $_GET['gud1i'] + $_GET['gud1j'];

$wh2 = $_GET['gud2a'] + $_GET['gud2b'] + $_GET['gud2c'] + $_GET['gud2d'] + $_GET['gud2e'] + $_GET['gud2f'] + $_GET['gud2g'] + $_GET['gud2h'] + $_GET['gud2i'] + $_GET['gud2j'];

$wh3 = $_GET['gud3a'] + $_GET['gud3b'] + $_GET['gud3c'] + $_GET['gud3d'] + $_GET['gud3e'] + $_GET['gud3f'] + $_GET['gud3g'] + $_GET['gud3h'] + $_GET['gud3i'] + $_GET['gud3j'];

$wh4 = $_GET['gud4a'] + $_GET['gud4b'] + $_GET['gud4c'] + $_GET['gud4d'] + $_GET['gud4e'] + $_GET['gud4f'] + $_GET['gud4g'] + $_GET['gud4h'] + $_GET['gud4i'] + $_GET['gud4j'];

$wh5 = $_GET['gud5a'] + $_GET['gud5b'] + $_GET['gud5c'] + $_GET['gud5d'] + $_GET['gud5e'] + $_GET['gud5f'] + $_GET['gud5g'] + $_GET['gud5h'] + $_GET['gud5i'] + $_GET['gud5j'];

$wh6 = $_GET['gud6a'] + $_GET['gud6b'] + $_GET['gud6c'] + $_GET['gud6d'] + $_GET['gud6e'] + $_GET['gud6f'] + $_GET['gud6g'] + $_GET['gud6h'] + $_GET['gud6i'] + $_GET['gud6j'];

$wh7 = $_GET['gud7a'] + $_GET['gud7b'] + $_GET['gud7c'] + $_GET['gud7d'] + $_GET['gud7e'] + $_GET['gud7f'] + $_GET['gud7g'] + $_GET['gud7h'] + $_GET['gud7i'] + $_GET['gud7j'];

$wh8 = $_GET['gud8a'] + $_GET['gud8b'] + $_GET['gud8c'] + $_GET['gud8d'] + $_GET['gud8e'] + $_GET['gud8f'] + $_GET['gud8g'] + $_GET['gud8h'] + $_GET['gud8i'] + $_GET['gud8j'];

$quantity = $_GET['wh1']+$_GET['wh2']+$_GET['wh3']+$_GET['wh4']+$_GET['wh5']+$_GET['wh6']+$_GET['wh7']+$_GET['wh8'];
//$sap = $_GET['sap'];
$selisih = $quantity - $_GET['sap'];
	$query_stok = mysqli_query($conn, "SELECT * FROM stok_opname a inner join gudang_a aa on aa.id_inventory=a.id_inventory inner join gudang_b ab on ab.id_inventory=a.id_inventory inner join gudang_c ac on ac.id_inventory=a.id_inventory inner join gudang_d ad on ad.id_inventory=a.id_inventory inner join gudang_e ae on ae.id_inventory=a.id_inventory inner join gudang_f af on af.id_inventory=a.id_inventory inner join kima ag on ag.id_inventory=a.id_inventory inner join butcher ah on ah.id_inventory=a.id_inventory where a.id_inventory='$id'");
	while ($hasil = mysqli_fetch_array ($query_stok)) {
	$sap=$hasil['sap'];
	}

//query update
$query = "UPDATE stok_opname SET id_inventory='$id' , tanggal='$tanggal', wh1='$wh1', wh2='$wh2', wh3='$wh3', wh4='$wh4', wh5='$wh5', wh6='$wh6', wh7='$wh7', wh8='$wh8', quantity='$quantity', selisih='$selisih' WHERE id_inventory='$id' ";

if (mysqli_query($conn, $query)) {
	
//kondisi level user
		# credirect ke page index
	if ($typeuser=='wh01'){
		header("location:menu_staff.php"); 
	}else if($typeuser=='pegawai'){
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