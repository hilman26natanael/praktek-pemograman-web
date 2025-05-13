<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  

        <!-- Konten utama -->
        <div class="container-fluid p-4" style="flex-grow: 1;">
            <h3>Halo, <span class="text-primary"><?= $_SESSION['username'] ?></span></h3>
            <h2 class="my-4">Data Mahasiswa</h2>

            <div class="mb-3">
                <a href="form.php" class="btn btn-success">Tambah Mahasiswa</a>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Ponsel</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('koneksi.php');
                        $username = $_SESSION['username'];
                        $sql = "SELECT * FROM mahasiswa WHERE username='$username'";
                        $result = $conn->query($sql);
                        while ($data = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?= $data['nim'] ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['gender'] ?></td>
                            <td><?= $data['email'] ?></td>
                            <td><?= $data['ponsel'] ?></td>
                            <td>
                                <img src="foto/<?= $data['foto'] ?>" alt="Foto Mahasiswa" width="100" class="img-thumbnail">
                            </td>
                            <td class="text-center">
                                <a href="edit.php?nim=<?= $data['nim'] ?>" class="btn btn-sm btn-primary mb-1">Edit</a>
                                <a href="delete.php?nim=<?= $data['nim'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                        <?php if ($result->num_rows == 0): ?>
                        <tr>
                            <td colspan="7" class="text-center text-muted">Tidak ada data mahasiswa.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
