<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'crudlat';
$socket = '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock'; // Tambahan penting di macOS

$koneksi = new mysqli($host, $user, $pass, $db, null, $socket);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
