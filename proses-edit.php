<?php 

include("config.php");

// Cek apakah tombol simpan sidah diklik atau belum?
if(isset($_POST['simpan'])) {

    // Ambil data dari formulir
    $id = $_POST['id'];
    $merk = $_POST['nama_merek'];
    $warna = $_POST['warna'];
    $jml = $_POST['jumlah'];


    // Buat query update
    $sql = "UPDATE handphone SET nama_merek='$merk', warna='$warna', jumlah='$jml' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // Apakah query update Berhasil?
    if( $query ) {
        // Kalau berhasil alihkan ke halaman list-barang.php
        header('Location: list-barang.php');
    } else {
        die("Gagal Menyimpan Perubahan!");
    }
} else {
    die("Akses Dilarang!!!");
}

?>