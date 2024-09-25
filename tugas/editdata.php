<?php
include('config.php');
$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
mysqli_query($connect, "UPDATE infoanak SET nama='$nama', kelas='$kelas' WHERE id='$id'");
header('location: home.php');
?>