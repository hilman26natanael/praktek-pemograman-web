<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Include Sidebar -->
    <?php include 'template/sidebar.php'; ?>

    <div class="container mt-5" style="margin-left: 260px;"> <!-- Menambahkan margin untuk menghindari sidebar -->
        <h2 class="mb-4">Form Tambah Mahasiswa</h2>
        <form action="save.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Gender</label>
                <select name="gender" class="form-select" required>
                    <option value="">-- Pilih Gender --</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Ponsel</label>
                <input type="text" name="ponsel" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="read.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
