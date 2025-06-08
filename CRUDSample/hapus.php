<?php
include 'koneksi.php';

$id = $_GET['id'];
$koneksi->query("DELETE FROM latihan WHERE nama='$id'");
header("Location: index.php");
?>
