<?php
include './function/config.php';
$nim = isset($_GET['nim']) ? $_GET['nim'] : false;
$nama = isset($_GET['nama']) ? $_GET['nama'] : false;
$programstudi = isset($_GET['programstudi']) ? $_GET['programstudi'] : false;
$tempatlahir = isset($_GET['tempatlahir']) ? $_GET['tempatlahir'] : false;
$tanggalahir = isset($_GET['tanggalahir']) ? $_GET['tanggalahir'] : false;
$jeniskelamin = isset($_GET['jeniskelamin']) ? $_GET['jeniskelamin'] : false;
$agama = isset($_GET['agama']) ? $_GET['agama'] : false;
$alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;
$kota = isset($_GET['kota']) ? $_GET['kota'] : false;
$provinsi = isset($_GET['provinsi']) ? $_GET['provinsi'] : false;
?>



<link
	href="https://fonts.googleapis.com/css?family=Montserrat"
	rel="stylesheet"
	type="text/css"
/>
<link rel="stylesheet" href="assets/css/style.css" />

<a href="index.php" class="btn-back">Kembali ke beranda</a>

<div class="login" style="height: auto; width: 405px">
	<h2 class="active">Sign up</h2>

	<form action="register-proses.php" method="POST">
		<input type="text" class="text" name="nim" placeholder="ex : 1811111" required />
		<span>nim</span>
		<br />
		<br />
		<input type="text" class="text" name="nama" placeholder="ex:dia" required />
		<span>Nama</span>
		<br />
		<br />
		<input
			type="text"
			class="text"
			name="programstudi"
			placeholder="ex:informatika" required
		/>
		<span>Program Studi </span>
		<br /><br />
		<input
			type="date"
			class="text"
			name="tanggalahir"
			placeholder="ex: 1 februari 2006"
			required
		/>
		<span>Tanggal Lahir</span>
		<br />
		<br />
		<input
			type="text"
			class="text"
			name="tempatlahir"
			placeholder="ex: Balikpapan"
			required
		/>
		<span>Tempat Lahir</span>
		<br />
		<br />
		<input type="text" class="text" name="agama" placeholder="ex: islam"
		 required/>
		<span>Agama</span>
		<br />
		<br />
		<input
			type="text"
			class="text"
			name="alamat"
			placeholder="ex:jalan sudirman"
			required
		/>
		<span>Alamat</span>
		<br />
		<br />
		<input
			type="text"
			class="text"
			name="kota"
			placeholder="ex: Kota balikpapan"
			required
		/>
		<span>Kota</span>
		<br />
		<br />
		<label for="">Jenis Kelamin : </label>
		<label><input type="radio" name="jeniskelamin" value="L"> Laki-laki</label>
    <label><input type="radio" name="jeniskelamin" value="P"> Perempuan</label>
		<br>
		<br>

		<input type="text" class="text" name="provinsi" placeholder="ex: kaltim" required/>
		<span>Provinsi</span>
		<br />
		<br />

		<button class="signin" name="register">Signup</button>
	</form>
</div>
