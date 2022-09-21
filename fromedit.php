<?php
include 'koneksi.php';

$id_siswa =$_GET['id_siswa'];
$sql = "SELECT * FROM sarpras WHERE id_siswa='$id_siswa'";
$query = mysqli_query($connect,$sql);
$pel = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("data tidak di temukan");
}
?=-
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sytle2.css">
</head>
<body>

    <div class="rec">
       <div class="rec2">
           <h3>Sarana Prasana</h3>
           <img src="https://avatars.githubusercontent.com/u/8860691?s=200&v=4" alt="img">
           <a href=""><p>Data Siswa</p></a>
           <a href=""><p>Data Peminjaman</p></a> 
       </div>
       <!-- content -->
       <div class="content">
           <h3>Sarana PraSarana SMK Taruna Bhakti</h3>
       </div>
    </div>
  <!-- php -->
   <div class="php">
<form action="edit.php" method="post">
<h3>edit data </h3>
<p><label>Id siswa : <input  value="<?php echo $pel['id_siswa']?>" required="required" type="hidden" name="id_siswa"></label></p>
<p><label>nama siswa : <input value="<?php echo $pel['nama_siswa']?>" required="required" type="text" name="nama_siswa"></label></p>
<p><label>jenis barang : <input value="<?php echo $pel['jenis_barang']?>" required="required" type="text" name="jenis_barang"></label></p>
<p><label>tgl peminjaman : <input value="<?php echo $pel['tgl_peminjaman']?>" required="required" type="number" name="tgl_peminjaman"></label></p>
<p><label>tgl pengembalian: <input value="<?php echo $pel['tgl_pengembalian']?>" required="required" type="number" name="tgl_pengembalian"></label></p>
<input type="submit" name="simpan" value="simpan">
</form>
   </div>
</body>
</html>
