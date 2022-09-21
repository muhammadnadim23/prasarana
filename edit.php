<?php

include 'koneksi.php';

if (isset($_POST['simpan'])) {

$id_siswa = $_POST ['id_siswa'];
$nama_siswa = $_POST ['nama_siswa'];
$jenis_barang = $_POST ['jenis_barang'];
$tgl_peminjaman = $_POST['tgl_peminjaman'];
$tgl_pengembalian = $_POST['tgl_pengembalian']; 

$sql ="UPDATE sarpras SET nama_siswa='$nama_siswa', jenis_barang ='$jenis_barang', tgl_peminjaman ='$tgl_peminjaman', tgl_pengembalian='$tgl_pengembalian'  WHERE id_siswa = '$id_siswa'";


$query = mysqli_query($connect, $sql);

if($query){
    header('Location: tampilanpeminjam.php');
}else{
    header('Location: edit.php?status=gagal');
}
}

?>