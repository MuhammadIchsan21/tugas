<?php

include './function/config.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];

$query = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE nim = '$nim' AND nama = '$nama' ");

if (mysqli_num_rows($query) == 0) {
    header("location :login.php");
} else {
    $row = mysqli_fetch_assoc($query);

    session_start();
    $_SESSION['nim'] = $row['nim'];
    $_SESSION['nama'] = $row['nama'];
    header("location:beranda.php");
}
?>