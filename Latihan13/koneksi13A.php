<<?php 
$host = "sql206.arihosting.web.id";
$username = "gngts_22732754";
$password = "admin1";
$database = "gngts_22732754_tbl_mahasiswa";
$koneksi13A = mysqli_connect($host, $username, $password);
$pilihdatabase = mysqli_select_db ($koneksi13A, $database);
if ($pilihdatabase) echo "Berhasil";
else echo "Gagal Koneksi";
 ?>