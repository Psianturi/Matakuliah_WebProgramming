<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "mahasiswa";
$koneksi = mysqli_connect($host, $username, $password);
$pilihdatabase = mysqli_select_db($koneksi, $database);
if ($pilihdatabase) echo "berhasil";
else echo "Gagal koneksi";
?>