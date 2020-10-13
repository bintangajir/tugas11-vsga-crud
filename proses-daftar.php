<?php

include("config.php");

// Cek apakah tombol daftar sudah diklik atau belum
if (isset($_POST['daftar'])) {

    // Ambil data dari formulir
    $merk = $_POST['nama_merek'];
    $warna = $_POST['warna'];
    $jml = $_POST['jumlah'];

    // Buat Query
    $sql = "INSERT INTO handphone (nama_merek, warna, jumlah) VALUE ('$merk', '$warna', '$jml')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if ($query) {
        // Kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // Kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses Dilarang!!!");
}
