<?php
include 'koneksi.php';

$old_nama = $_POST['old_nama'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal_lahir'];
$jk = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];

$sql = "UPDATE latihan SET 
    nama='$nama',
    tanggal_lahir='$tanggal',
    jenis_kelamin='$jk',
    agama='$agama',
    alamat='$alamat'
    WHERE nama='$old_nama'";

$koneksi->query($sql);
header("Location: index.php");
?>
