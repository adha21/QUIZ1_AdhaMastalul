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