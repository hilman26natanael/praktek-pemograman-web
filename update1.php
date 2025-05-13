<?php
include('koneksi.php');
$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$gender= $_POST['gender'];
$email = $_POST['email'];
$ponsel = $_POST['ponsel'];

$sql = "update dosen set nama='$nama',jabatan='$jabatan', gender='$gender', email='$email', 
ponsel='$ponsel' where nidn ='$nidn'";
$exe = $conn->query($sql);
if ($exe){
    header("location:read1.php");
}
?>