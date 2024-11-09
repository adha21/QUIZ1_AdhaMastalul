<?php
#1. membuat koneksi database dengan PHP
include("koneksi.php");
#2. mengambil semua value dari form dan dimasukkan ke masing2 variabel
$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$rumpun = $_POST['rumpun'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$email = $_POST['email'];
#3. menuliskan query SQL simpan
$simpan = "INSERT INTO dosen (nidn, nama, rumpun, tempat, tanggal, email) VALUES  ('$nidn','$nama','$rumpun','$tempat','$tanggal','$email')";
#4. menjalankan query
mysqli_query($koneksi, $simpan);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Dosen</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Form Dosen</h3>
                    </div>
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                    <td scope="row">nidn</td>
                                    <th>: <?=$nidn?></th>
                                    </tr>
                                    <tr>
                                    <td scope="row">Nama Lengkap</td>
                                    <th>: <?=$nama?></th>
                                    </tr>
                                    <tr>
                                    <td scope="row">Rumpun</td>
                                    <th>: <?=$rumpun?></th>
                                    </tr>
                                    <tr>
                                    <td scope="row">Tempat Lahir</td>
                                    <th>: <?=$tempat?></th>
                                    </tr>
                                    <tr>
                                    <td scope="row">Tanggal Lahir</td>
                                    <th>: <?=$tanggal?></th>
                                    </tr>
                                    <tr>
                                    <td scope="row">Email</td>
                                    <th>: <?=$email?></th>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="index.php" class="btn btn-primary">Kembali</a>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>