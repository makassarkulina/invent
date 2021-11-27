<!DOCTYPE html>
<html lang="en">
<head>
 <title>Inventory</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
 <script src="js/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

</head>
<body>
 <?php
 //tambahkan dbconnect
 include('dbconnect.php');

 //query
 $query = "SELECT * FROM stok_opname";

 $result = mysqli_query($conn , $query);

 ?>
<a href="menu_admin.php">Beranda</a> | 
<a href="menu_admin.php?menu=user">Tambah Item</a> |
<a href="rekapitulasi.php?menu=rekapitulasi">Data Rekapitulasi</a> | 
<a href="logout.php">Logout</a> | 
 <div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">
  <h3>Inventory</h3>
  <hr>
  <!-- <div class="row">
   <div class="col-sm-4">
    <h3>Form Tambah Item</h3>
    <form role="form" action="insert.php" method="post">
     <div class="form-group">
      <label>ID</label>
      <input type="text" name="id_inventory" class="form-control">
     </div>
     <div class="form-group">
      <label>Nama Item</label>
      <input type="text" name="nama_barang" class="form-control">
     </div>
     <div class="form-group">
      <label>Item Code</label>
      <input type="text" name="kode_barcode" class="form-control">
     </div>
     <div class="form-group">
      <label>Quantiti</label>
      <input type="text" name="quantity" class="form-control">
     </div>
     <button type="submit" class="btn btn-info btn-block" >Tambah Item</button>     
    </form>
    
   </div> -->
   <div class="col-sm-8">
    <h3>Tabel Daftar Item</h3>
    <table class="table table-striped table-hover dtabel">
     <thead>
      <tr>
       <th>No</th>
       <th>Nama Item</th>
       <th>Item Code</th>
	   <th>UoM</th>
       <th>Gudang 1</th>
	   <th>Gudang 2</th>
       <th>Gudang 3</th>
	   <th>Gudang 4</th>
	   <th>Gudang 5</th>
	   <th>Gudang 6</th>
	   <th>Gudang 7</th>
	   <th>Gudang 8</th>
	   <th>Kuantiti Total</th>
	   <th>SAP</th>
	   <th>Selisih</th>
	   <th>Aksi</th>
      </tr>
     </thead>
     <tbody> 
      
      <?php
       $no = 1;  
       while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
       <td><?php echo $no++; ?></td>
       <td><?php echo $row['nama_barang']; ?></td>
       <td><?php echo $row['kode_barcode']; ?></td>
	   <td><?php echo $row['uom']; ?></td>
	   <td><?php echo $row['wh1']; ?></td>
	   <td><?php echo $row['wh2']; ?></td>
	   <td><?php echo $row['wh3']; ?></td>
	   <td><?php echo $row['wh4']; ?></td>
	   <td><?php echo $row['wh5']; ?></td>
	   <td><?php echo $row['wh6']; ?></td>
	   <td><?php echo $row['wh7']; ?></td>
	   <td><?php echo $row['wh8']; ?></td>
	   <td><?php echo $row['quantity']; ?></td>
	   <td><?php echo $row['sap']; ?></td>
	   <td><?php echo $row['selisih']; ?></td>
       <td>
        <a href="editform.php?id=<?php echo $row['id_inventory'];?>" class="btn btn-success" role="button" target="_blank">Edit</a>
        <!-- <a href="delete.php?id=<?php echo $row['id_inventory']?>" class="btn btn-danger" role="button" >Delete</a> -->
       </td>
      </tr>

      <?php
       }
       mysqli_close($conn); 
      ?>
     </tbody>
    </table>
   </div>
  </div>
 </div>
</body>

 <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
 <script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
 <script>
 $(document).ready(function() {
  $('.dtabel').DataTable();
 } );
 </script>

</html>