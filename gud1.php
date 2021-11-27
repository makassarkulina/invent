<!DOCTYPE html>
<html lang="en">
<head>
 <title>Inventory</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
 <script src="js/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
 session_start();
 if (!isset($_SESSION["username"])){
    header("location: index.php");
}
$id = $_GET['id']; 
//koneksi database
include('dbconnect.php');
//query
$query = "SELECT * FROM gudang_a WHERE id_inventory='$id'";
$result = mysqli_query($conn, $query);
?>

<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">
<p>Username: <?php echo $_SESSION['username']; ?> || Posisi: <?php echo $_SESSION['gudang']; ?></p>
<div><!-- <a href="menu_admin.php">Beranda</a> | 
<a href="menu_admin.php?menu=user">Tambah Item</a> |-->
<?php
  
if ($_SESSION['level'] == "admin")
{
    // tampilkan menu untuk admin
    echo "<a href='menu_admin.php'>Beranda</a> | ";  
}
else if ($_SESSION['level'] == "pegawai")
{
    // tampilkan menu untuk user biasa
    echo "<a href='rekapitulasi.php'>Beranda</a> |";
}
else if ($_SESSION['level'] == "wh01")
{
    // tampilkan menu untuk user biasa
    echo "<a href='menu_staff.php'>Beranda</a> |";
}
  
?>
<a href="logout.php"> Logout</a> </div>
 <h3>Update Data Item</h3>
 
 <form role="form" action="edit.php" method="get">
 <?php
 while ($row = mysqli_fetch_assoc($result)) {
 ?>

 <input type="hidden" name="id_inventory" value="<?php echo $row['id_inventory']; ?>">
 
<div class="form-group">
  <label>Tanggal</label>
  <input type="text" name="tanggal" class="form-control" value="<?php echo date('y-m-d'); ?>">   
 </div>
 
 <div class="form-group">
  <label>Nama Item</label> </br>
  <input type="text" name="nama_barang" class="form-control" value="<?php echo $row['nama_barang']; ?>">  
 </div>

 <div class="form-group">
  <label>Item Code</label>
  <input type="text" name="kode_barcode" class="form-control" value="<?php echo $row['kode_barcode']; ?>"> 
 </div>
 
 <div class="form-group">
  <label>UoM</label>
  <input type="text" name="uom" class="form-control" value="<?php echo $row['uom']; ?>">   
 </div>
 
 <div class="form-group">
   <label>Gudang 1A</label>
  <input type="text" name="gud1a" class="form-control" value="<?php echo $row['gud1a']; ?>">   
 </div>
 
 <div class="form-group">
  <label>Gudang 1B</label>
  <input type="text" name="gud1b" class="form-control" value="<?php echo $row['gud1b']; ?>">   
 </div> 
 
 <div class="form-group">
  <label>Gudang 1C</label>
  <input type="text" name="gud1c" class="form-control" value="<?php echo $row['gud1c']; ?>">   
 </div>
 
 <div class="form-group">
  <label>Gudang 1D</label>
  <input type="text" name="gud1d" class="form-control" value="<?php echo $row['gud1d']; ?>">   
 </div>
 
 <div class="form-group">
  <label>Gudang 1E</label>
  <input type="text" name="gud1e" class="form-control" value="<?php echo $row['gud1e']; ?>">   
 </div>
 
 <div class="form-group">
  <label>Gudang 1F</label>
  <input type="text" name="gud1f" class="form-control" value="<?php echo $row['gud1f']; ?>">   
 </div>
 
 <div class="form-group">
  <label>Gudang 1G</label>
  <input type="text" name="gud1g" class="form-control" value="<?php echo $row['gud1g']; ?>">   
 </div>
 
 <div class="form-group">
  <label>Gudang 1H</label>
  <input type="text" name="gud1h" class="form-control" value="<?php echo $row['gud1h']; ?>">   
 </div>
 
 <div class="form-group">
  <label>Gudang 1I</label>
  <input type="text" name="gud1i" class="form-control" value="<?php echo $row['gud1i']; ?>">   
 </div>

<div class="form-group">
  <label>Gudang 1J</label>
  <input type="text" name="gud1j" class="form-control" value="<?php echo $row['gud1j']; ?>">   
 </div>
  <button type="submit" class="btn btn-success btn-block">Update Item</button>
 
<?php 
 }
 mysqli_close($conn);
 ?>   
 </form>
</div>
</body>
</html>