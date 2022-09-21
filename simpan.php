<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $id_siswa = $_POST ['id_siswa'] ;
    $nama_siswa = $_POST ['nama_siswa'] ;
    $jenis_barang = $_POST ['jenis_barang'] ;
    $tgl_peminjaman = $_POST ['tgl_peminjaman'] ;
    $tgl_pengembalian = $_POST ['tgl_pengembalian'] ;


    $sql = "INSERT INTO sarpras (id_siswa, nama_siswa, jenis_barang, tgl_peminjaman, tgl_pengembalian) VALUES('$id_siswa','$nama_siswa','$jenis_barang','$tgl_peminjaman','$tgl_pengembalian')";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: tampilanpeminjam.php');
    }else{
        header('Location: simpan.php?status=gagal');
    }
}
?>