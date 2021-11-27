<?php 

$id = $_GET['id'];

//include(dbconnect.php);
include('dbconnect.php');

//query hapus
$query = "DELETE FROM stok_opname WHERE id_inventory = '$id' ";

if (mysqli_query($conn , $query)) {
 # redirect ke index.php
 header("location:menu_admin.php");
}
else{
 echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($conn);
?>