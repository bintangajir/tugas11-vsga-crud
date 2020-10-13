<?php

$server = "localhost";
$user = "id15107610_dts2020";
$password = "=53YGG8GZ4c5\#**";
$nama_database = "id15107610_dts_2020";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Gagal Terhubung dengan Database: " . mysqli_connect_error());
}
