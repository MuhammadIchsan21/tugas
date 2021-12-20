<?php
session_start();
if ($_SESSION['nim'] == NULL){
    header('location: login.php');
} else {
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Beranda</title>
		<link rel="stylesheet" href="assets/css/index.css" />
	</head>
	<body>
		<a href="logout.php"
		style="text-decoration: none; color: #000000;
						background-color: red;
  					border: none;
  					color: white;
						margin:20px;
  					padding: 15px 32px;
  					text-align: center;
  					text-decoration: none;
  					display: inline-block;
  					font-size: 16px;
						border-radius:8px;">Logout</a>
		<section class="work section" id="gallery">
			<h2 class="section-title">Daftar Dosen bimbingan</h2>
			<div class='work__container bd-grid'>
			<?php
			include './function/config.php';
			$dosen = mysqli_query($koneksi, "SELECT * from dosen");
			foreach ($dosen as $row){
				echo
				"
					<div class='work__img'>
						<img src='assets/images/1.jpg' alt='' />
						<a href='data-dosen.php'
						style='text-decoration: none; color: #000000; margin:20px;'>".$row['namadosen']."</a>
						<br>
						<br>
						<a href='form-bimbingan.php'
						style='text-decoration: none; color: #000000;
						background-color: #4CAF50;
  					border: none;
  					color: white;
						margin:20px;
  					padding: 15px 32px;
  					text-align: center;
  					text-decoration: none;
  					display: inline-block;
  					font-size: 16px;
						border-radius:8px;'>Bimbingan</a>
					</div>
				"
				;
			}
			?>
			</div>
		</section>
	</body>
</html>
<?php
}
?>