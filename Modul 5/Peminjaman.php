<?php
    require('Model.php');
    if(isset($_GET['id_peminjaman'])) {
        hapusPeminjaman($_GET['id_peminjaman']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
    <div class="container">
        <h2>Peminjaman</h2>
        <a href="Index.php" class="btn btn-primary">Kembali</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Peminjaman</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Kembali</th>
                    <th>ID Member</th>
                    <th>ID Buku</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php tampilPeminjaman(); ?>
            </tbody>
        </table>
        <a href="FormPeminjaman.php" class="btn btn-primary">Tambah Peminjaman</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>