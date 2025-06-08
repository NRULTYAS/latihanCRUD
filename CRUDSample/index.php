<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4 text-primary">Data Mahasiswa</h2>
        <a href="tambah.php" class="btn btn-success mb-3">Tambah Data</a>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $koneksi->query("SELECT * FROM latihan");
                while ($row = $result->fetch_assoc()):
                ?>
                <tr>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['tanggal_lahir'] ?></td>
                    <td><?= $row['jenis_kelamin'] ?></td>
                    <td><?= $row['agama'] ?></td>
                    <td><?= $row['alamat'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['nama'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="hapus.php?id=<?= $row['nama'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
