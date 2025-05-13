<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php
    include ('koneksi.php');
    $x = $_GET['nidn'];
    $sql = "select * from dosen where nidn = '$x'";
    $exe = $conn->query($sql);
    $data = $exe->fetch_assoc();
    ?>
    <h2>Form Edit Dosen</h2>
    <form action="update1.php" method= "POST">
    Nim : <br>
    <input type="text" name="nidn" id="" value="<?=$data['nidn']?>" readonly><br>
    Nama: <br>
    <input type="text" name="nama" id="" value="<?=$data['nama']?>"><br>
    Jabatan: <br>
    <input type="text" name="jabatan" id="" value="<?=$data['jabatan']?>"><br>
    Gender : <br>
    <select name="gender" id="">
    <option value="<?=$data['gender']?>"><?=$data['gender']?></option>
    <option value="Laki-laki">Laki-laki
    </option>
    <option value="Perempuan">Perempuan
    </option>
    </select> <br>
    Email : <br>
    <input type="text" name="email" id="" value="<?=$data['email']?>"><br>
    Ponsel : <br>
    <input type="text" name="ponsel" id="" value="<?=$data['ponsel']?>"><br>
    <button type="submit">Simpan</button>
    </form>
</body>
</html>