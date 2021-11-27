<?php
//add dbconnect

include('dbconnect.php');

$id = $_POST['id_inventory'];
$nama_barang = $_POST['nama_barang'];
$kode_barcode = $_POST['kode_barcode'];
$uom = $_POST['uom'];
$wh1 = $_POST['wh1'];
$wh2 = $_POST['wh2'];
$wh3 = $_POST['wh3'];
$wh4 = $_POST['wh4'];
$wh5 = $_POST['wh5'];
$wh6 = $_POST['wh6'];
$wh7 = $_POST['wh7'];
$wh8 = $_POST['wh8'];
$quantity = $_POST['quantity'];
$sap = $_POST['sap'];
$selisih = $_POST['selisih'];

//query

$query =  "INSERT INTO stok_opname(id_inventory , nama_barang , kode_barcode , uom, wh1, wh2, wh3, wh4, wh5, wh6, wh7, wh8, quantity, sap, selisih) 
VALUES('$id' , '$nama_barang' , '$kode_barcode' , '$uom', '$wh1', '$wh2', '$wh3', '$wh4', '$wh5', '$wh6', '$wh7', '$wh8','$quantity', '$sap', '$selisih')";

if (mysqli_query($conn , $query)) {
 # code redicet setelah insert ke index
 header("location:menu_admin.php");
}
else{
 echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>