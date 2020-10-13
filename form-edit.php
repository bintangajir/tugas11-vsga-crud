<?php

include("config.php");

// Kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list-barang.php');
}

// Ambil id dari query String
$id = $_GET['id'];

// Buat query untuk ambil data dari database
$sql = "SELECT * FROM handphone WHERE id=$id";
$query = mysqli_query($db, $sql);
$hp = mysqli_fetch_assoc($query);

// Jika data yang di-edit tidak ditemukan 
if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan!");
}
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&display=swap" rel="stylesheet">
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Formulir Edit Barang</title>
</head>

<body>

    <header class="text-center my-4">
        <h3>Formulir Edit Barang</h3>
    </header>

    <div class="container-md">
        <div class="row">
            <div class="col-lg-8  mx-auto">
                <div class="card ">
                    <div class="card-body">
                        <form action="proses-edit.php" method="POST">
                            <input type="hidden" name="id" value="<?= $hp['id']; ?>">
                            <div class="form-group">
                                <label for="nama_merek">Nama: </label>
                                <input type="text" name="nama_merek" class="form-control" value="<?= $hp['nama_merek']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="warna">Warna: </label>
                                <input type="text" name="warna" class="form-control" value="<?= $hp['warna']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah: </label>
                                <input type="number" name="jumlah" class="form-control" value="<?= $hp['jumlah']; ?>">
                            </div>
                            <input type="submit" name="simpan" class="btn btn-primary btn-block" value="Simpan">
                            <a class="btn btn-secondary btn-block mt-2" href="list-barang.php" role="button">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="pt-4 text-center bg-white mt-5">
        <p class="my-1">© Rahmad Bintang Aji Indra Yaksa - Tugas 11 Project Data Entry 2020</p>
        <ul class="list-inline py-3">
            <li class="list-inline-item">
                <a href="https://github.com/bintangajir/" class="fa fa-lg fa-github"></a>
            </li>
            <li class="list-inline-item">
                <a href="https://www.instagram.com/ajii023_/" class="fa fa-lg fa-instagram"></a>
            </li>
            <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/rahmad-bintang-aji-indra-yaksa-bb27481b3/" class="fa fa-lg fa-linkedin"></a>
            </li>
        </ul>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>