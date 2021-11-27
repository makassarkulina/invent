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
$id = $_GET['id']; 
//koneksi database
include('dbconnect.php');
//query
$query = "SELECT * FROM stok_opname WHERE id_inventory='$id'";
$result = mysqli_query($conn, $query);
?>

<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">
 <h3>Update Data Item</h3>
 <form role="form" action="edit.php" method="get">
 <?php
 while ($row = mysqli_fetch_assoc($result)) {
 ?>

 <input type="hidden" name="id_inventory" value="<?php echo $row['id_inventory']; ?>">

 <div class="form-group">
  <label>Nama Item</label>
  <input type="text" name="nama_barang" class="form-control" value="<?php echo $row['nama_barang']; ?>">   
 </div>

 <div class="form-group">
  <label>Barcode</label>
  <input type="text" name="kode_barcode" class="form-control" value="<?php echo $row['kode_barcode']; ?>">   
 </div>
 
 <div class="form-group">
  <label>UoM</label>
  <input type="text" name="uom" class="form-control" value="<?php echo $row['uom']; ?>">   
 </div>
 
 <div class="form-group">
  <label>Gudang 1</label>
  <input type="text" name="wh1" class="form-control" value="<?php echo $row['wh1']; ?>">   
 </div>
 
 <div class="form-group">
  <label>Gudang 2</label>
  <input type="text" name="wh2" class="form-control" value="<?php echo $row['wh2']; ?>">   
 </div>
 
 <div class="form-group">
  <label>Gudang 3</label>
  <input type="text" name="wh3" class="form-control" value="<?php echo $row['wh3']; ?>">   
 </div>
 
 <div class="form-group">
  <label>Gudang 4</label>
  <input type="text" name="wh4" class="form-control" value="<?php echo $row['wh4']; ?>">   
 </div>
 
 <div class="form-group">
  <label>Gudang 5</label>
  <input type="text" name="wh5" class="form-control" value="<?php echo $row['wh5']; ?>">   
 </div>
 
 <div class="form-group">
  <label>Gudang 6</label>
  <input type="text" name="wh6" class="form-control" value="<?php echo $row['wh6']; ?>">   
 </div>
 
 <div class="form-group">
  <label>Gudang 7</label>
  <input type="text" name="wh7" class="form-control" value="<?php echo $row['wh7']; ?>">   
 </div>
 
 <div class="form-group">
  <label>Gudang 8</label>
  <input type="text" name="wh8" class="form-control" value="<?php echo $row['wh8']; ?>">   
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