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
    <form action="simpan.php" method="post">
        <h3>Tambah Data Pelanggan</h3>
        <p><label>Id siswa : <input required="required" type="number" name="id_siswa"></label></p>
        <p><label>Nama siswa : <input required="required" type="text" name="nama_siswa"></label></p>
        <p><label>tgl peminjaman: <input required="required" type="number" name="telepon"></label></p>
        <p><label>tgl pengembalian: <input required="required" type="text" name="email"></label></p>
        <input type="submit" name="simpan" value="simpan">
    </form>
</body>
</html>