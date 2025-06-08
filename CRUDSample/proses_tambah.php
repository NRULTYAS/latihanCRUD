<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$tanggal = $_POST['tanggal_lahir'];
$jk = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];

$koneksi->query("INSERT INTO latihan (nama, tanggal_lahir, jenis_kelamin, agama, alamat) VALUES ('$nama', '$tanggal', '$jk', '$agama', '$alamat')");
header("Location: index.php");
?>
