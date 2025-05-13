<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Data Dosen</h2>

        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Ponsel</th>
                    <th>Proses</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('koneksi.php');
                $sql = "SELECT * FROM dosen";
                $result = $conn->query($sql);
                while ($data = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?= $data['nidn'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['jabatan'] ?></td>
                    <td><?= $data['gender'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td><?= $data['ponsel'] ?></td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="edit1.php?nidn=<?= $data['nidn'] ?>">Edit</a>
                        <a class="btn btn-sm btn-danger" href="delete1.php?nidn=<?= $data['nidn'] ?>" onclick="return confirm('Yakin dihapus?')">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <a href="form1.php" class="btn btn-success mt-3">Tambah Dosen</a>
    </div>
</body>
</html>
