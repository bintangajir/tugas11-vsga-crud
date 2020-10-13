<?php

include("config.php");
if (isset($_GET['id'])) {

    // Ambil id dari query string
    $id = $_GET['id'];

    // Buat query hapus
    $sql = "DELETE FROM handphone WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // Apakah query hapus Berhasil?
    if ($query) {
        header('Location: list-barang.php');
    } else {
        die("Akses Dilarang!!!");
    }
}
