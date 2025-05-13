<?php
include('koneksi.php');
$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$gender= $_POST['gender'];
$email = $_POST['email'];
$ponsel = $_POST['ponsel'];
$sql = "insert into dosen values ('$nidn','$nama','$jabatan','$gender','$email','$ponsel')";
$result = $conn->query($sql);
if($result){
    header("location:read1.php");
} else {
    echo "Gagal menyimpan";
}
?>