<?php
include 'koneksi.php';

if(isset($_GET['id'])) {
    header('Location: tampilanpeminjam.php');
}

$id_pel = $_GET['id_siswa'];

$sql = "DELETE FROM sarpras WHERE id_siswa='$id_pel'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location: tampilanpeminjam.php');
}else{
    header('Location: hapus.php?status=gagal');
}
?>