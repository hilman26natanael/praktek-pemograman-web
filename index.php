<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        <?php include 'template/sidebar.php'; ?>

        <!-- Konten utama -->
        <div class="p-4" style="margin-left: 250px;">
            <?php
            // Ambil parameter 'page' dari URL
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';

            // Routing konten berdasarkan nilai 'page'
            switch ($page) {
                case 'home':
                    echo '<h1>Selamat Datang di Website Mahasiswa dan Dosen</h1>';
                    echo '<p>Gunakan menu di samping untuk mengelola data mahasiswa dan dosen.</p>';
                    break;

                case 'read':
                    include 'read.php'; // Menampilkan tabel mahasiswa
                    break;

                case 'read1':
                    include 'read1.php'; // Menampilkan tabel dosen
                    break;

                case 'form':
                    include 'form.php'; // Form tambah mahasiswa
                    break;

                case 'form1':
                    include 'form1.php'; // Form tambah dosen
                    break;

                case 'login':
                    include 'login.php'; // Halaman login
                    break;

                case 'logout':
                    include 'logout.php'; // Halaman logout
                    break;

                default:
                    echo '<h4>Silakan pilih menu di samping untuk memulai.</h4>';
                    break;
            }
            ?>
        </div>
    </div>
</body>
</html>
