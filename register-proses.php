<?php
include './function/config.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$programstudi = $_POST['programstudi'];
$tempatlahir = $_POST['tempatlahir'];
$tanggalahir = $_POST['tanggalahir'];
$jeniskelamin = $_POST['jeniskelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$provinsi = $_POST['provinsi'];


$query = mysqli_query($koneksi, "INSERT INTO mahasiswa(nim, nama, programstudi, tempatlahir, tanggalahir, jeniskelamin, agama, alamat, kota, provinsi)
VALUES ('$nim', '$nama', '$programstudi', '$tempatlahir', '$tanggalahir', '$jeniskelamin', '$agama','$alamat', '$kota', '$provinsi')");

if ($query) {
  header('location:login.php');
}else {
  echo 'Rusak Kodemu';
}



