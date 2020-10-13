<?php include("config.php"); ?>

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

    <title>Katalog Barang</title>
</head>

<body>

    <header class="text-center my-4">
        <h3>Katalog Barang</h3>
    </header>

    <div class="container-md ">
        <div class="row">
            <div class="mx-auto">
                <div class="card">
                    <div class="card-body">
                        <a href="form-daftar.php" class="btn btn-primary mb-3"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Tambah </a>
                        <br>
                        <table class="table table-striped text-center">
                            <thead>
                                <tr class="bg-primary" style="color: #fff;">
                                    <th scope="row">No.</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Warna</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM handphone";
                                $query = mysqli_query($db, $sql);
                                $no = 1;
                                ?>
                                <?php while ($hp = mysqli_fetch_array($query)) { ?>
                                    <tr>
                                        <th scope="col"><?= $no ?></th>
                                        <td scope="col"><?= $hp["nama_merek"]; ?></td>
                                        <td scope="col"><?= $hp["warna"]; ?></td>
                                        <td scope="col"><?= $hp["jumlah"]; ?></td>
                                        <td scope="col">
                                            <a href="form-edit.php?id='<?= $hp["id"]; ?>'" class="btn btn-sm btn-success ">Edit</a>
                                            <a href="hapus.php?id='<?= $hp["id"]; ?>'" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                <?php } ?>
                            </tbody>
                        </table>
                        <br>
                        <p style="font-weight: bold;">Total: <?= mysqli_num_rows($query) ?></p>
                        <a class="btn btn-secondary btn-block mt-2" href="index.php" role="button">Kembali</a>
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