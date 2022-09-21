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
    <link rel="stylesheet" href="sytle1.css">
</head>
<body>
<div class="rec">
       
       <div class="rec2">
           <h3>Sarana Prasana</h3>
           <img src="https://avatars.githubusercontent.com/u/8860691?s=200&v=4" alt="img">
           <a href="data-siswa.php"><p>Data Siswa</p></a>
           <a href="tampilanpeminjam.php"><p>Data Peminjaman</p></a> 
       </div>
       <!-- content -->
       <div class="content">
           <h3>Sarana PraSarana SMK Taruna Bhakti</h3>
       </div>
   </div>
   <!-- php -->
   <div class="php">
   <h3>Data Peminjam</h3>
    <h4><a href="peminjam.html">[+] tambah data</a></h4>
    <table border "1" cellspacing = "0" 
    cellpadding = "11" >
       
     <tr>
            <th>id siswa</th>
            <th>nama siswa</th>
            <th>jenis barang</th> 
            <th>tgl peminjaman</th>
            <th>tgl pengembalian</th>
            <th>action</th>
        </tr>
        <?php
       $sql = "SELECT * FROM sarpras";
       $query = mysqli_query($connect, $sql);
       while($pel = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>".$pel['id_siswa']."</td>";
        echo "<td>".$pel['nama_siswa']."</td>";
        echo "<td>".$pel['jenis_barang']."</td>";
        echo "<td>".$pel['tgl_peminjaman']."</td>";
        echo "<td>".$pel['tgl_pengembalian']."</td>";

        echo "<td>";
        echo "<a href='fromedit.php?id_siswa=".$pel['id_siswa']."'>Edit</a> | ";
        echo "<a href='hapus.php?id_siswa=".$pel['id_siswa']."'>Hapus</a>";
        echo "</tr>";
        echo "</td>";
     }
     ?>
    </table>
   </div>
</body>
</html>
    

       
     