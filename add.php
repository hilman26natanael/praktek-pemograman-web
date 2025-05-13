<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Form Tambah Mahasiswa</h4>
        </div>
        <div class="card-body">
            <form action="save.php" method="POST" enctype="multipart/form-data" class="row g-3">

                <div class="col-md-6">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" name="nim" id="nim" required>
                </div>

                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" required>
                </div>

                <div class="col-md-6">
                    <label for="gender" class="form-label">Jenis Kelamin</label>
                    <select name="gender" class="form-select" id="gender" required>
                        <option selected disabled>-- Pilih Jenis Kelamin --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>

                <div class="col-md-6">
                    <label for="ponsel" class="form-label">Ponsel</label>
                    <input type="text" class="form-control" name="ponsel" id="ponsel" required>
                </div>

                <div class="col-md-6">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" name="foto" id="foto" accept="image/*" required>
                </div>

                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="read.php" class="btn btn-secondary">Kembali ke Daftar Mahasiswa</a>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS (opsional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
