<?php
include './function/config.php';

$query = mysqli_query($koneksi, "SELECT * from dosen");
$dosen = mysqli_fetch_array($query);

$query1 = mysqli_query($koneksi, "SELECT * from mahasiswa");
$mahasiswa = mysqli_fetch_array($query1);
?>
<link rel="stylesheet" href="./assets/css/index.css">
<form action="form-bimbingan-proses.php" method="POST">
    <section class="contact section" id="contact">
        <h2 class="section-title">Form Bimbingan</h2>
        <div class="contact__container bd-grid">
          <form action="" class="contact__form">
            <input type="text" name="iddosen" placeholder="id dosen" class="contact__input" placeholder="Dosen" value="<?php echo $dosen['iddosen']?> "/>
            <input type="text" name="nim" placeholder="nim" class="contact__input" value="<?php echo $mahasiswa['nim']?>" />
            <input type="text" name="uraianbimbingan" class="contact__input" placeholder="Uraian" required>
            <input type="text" name="jenisbimbingan" class="contact__input" placeholder="jenis bimbingan" required>
            <input type="date" name="tanggalbimbingan" class="contact__input" placeholder="Tanggal Bimbingan" required>
            <input type="text" name="statusbimbingan" class="contact__input" placeholder="Status Bimbingan" required>
            <button class="contact__button button">Submit</button>
          </form>
        </div>
      </section>
</form>