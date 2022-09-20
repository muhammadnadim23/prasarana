<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Data Pelanggan</h3>
    <h4><a href="pelanggan.html">[+] tambah baru</a></h4>
    <table border "1">
       
     <tr>
            <th>id siswa</th>
            <th>nama siswa</th>
            <th>jenis barang</th> 
            <th>tgl peminjaman</th>
            <th>tfl pengembalian</th>
        </tr>
        <?php
       $sql = "SELECT * FROM sarpras";
       $query = mysqli_query($connect, $sql);
       
     