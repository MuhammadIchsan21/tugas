<?php
include './function/config.php';

$nim = $_POST['nim'];
$iddosen = $_POST['iddosen'];
$uraianbimbingan = $_POST['uraianbimbingan'];
$jenisbimbingan = $_POST['jenisbimbingan'];
$tanggalbimbingan = $_POST['tanggalbimbingan'];
$statusbimbingan = $_POST['statusbimbingan'];


$query = mysqli_query($koneksi, "INSERT INTO membimbing(nim, iddosen, uraianbimbingan, jenisbimbingan, tanggalbimbingan, statusbimbingan)
VALUES ('$nim', '$iddosen', '$uraianbimbingan', '$jenisbimbingan', '$tanggalbimbingan', '$statusbimbingan')");

if($query) {
  header('location:berhasil.php');
}else {
  echo 'Rusak Kodemu';
}



