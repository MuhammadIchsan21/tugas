<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" href="assets/css/index.css" />

		<!--==== BOX ICONS ====-->
		<link
			href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
			rel="stylesheet"
		/>
		<title>Bimbingan</title>
	</head>
	<body>
		<!-- === HEADER === -->
		<header class="l-header">
			<nav class="nav bd-grid">
				<div>
					<a href="#" class="nav__logo">Bimbingan</a>
				</div>
				<div class="nav__menu" id="nav-menu">
					<ul class="nav__list">
						<li class="nav__item">
							<a href="#home" class="nav__link active">Home</a>
						</li>
						<li class="nav__item">
							<a href="#about" class="nav__link active">About</a>
						</li>
						<li class="nav__item">
							<a href="#gallery" class="nav__link active">Gallery</a>
						</li>
						<li class="nav__item"></li>
						<li class="nav__item">
							<a href="login.php" class="nav__link active">Login</a>
						</li>
					</ul>
				</div>
				<div class="nav__toggle" id="nav-toggle">
					<i class="bx bx-menu"></i>
				</div>
			</nav>
		</header>
		<main class="main">
			<section class="home bd-grid" id="home">
				<div class="home__data">
					<h1 class="home__title">
						Selamat Datang di
						<br />
						Layanan Bimbingan
					</h1>
					<a href="login.php" class="button">Get Started</a>
				</div>

				<div class="home__social"></div>

				<div class="home__img">
					<img src="assets/images/teacher-3d.jpg" alt="" />
				</div>
			</section>

			<!-- === ABOUT ===-->
			<section class="about section" id="about">
				<h2 class="section-title">About</h2>
				<div class="about__container bd-grid">
					<div class="about__img">
						<img src="assets/images/teacher-3d.jpg" alt="" />
					</div>
					<div>
						<h2 class="about__subtitle">Bimbingan Online</h2>
						<p class="about__text">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa facilis
							nulla laborum laudantium repudiandae sapiente itaque, eligendi soluta
							assumenda! Temporibus nesciunt libero mollitia laboriosam obcaecati
							voluptatem, nulla expedita nobis molestiae!
						</p>
					</div>
				</div>
			</section>

			<!-- === WORK GALLERY ===-->

			<section class="work section" id="gallery">
				<h2 class="section-title">Gallery</h2>
				<div class="work__container bd-grid">
					<div class="work__img">
						<img src="assets/images/1.jpg" alt="" />
					</div>
					<div class="work__img">
						<img src="assets/images/2.jpg" alt="" />
					</div>
					<div class="work__img">
						<img src="assets/img/3.jpg" alt="" />
					</div>
					<div class="work__img">
						<img src="assets/img/4.jpg" alt="" />
					</div>
					<div class="work__img">
						<img src="assets/img/5.jpg" alt="" />
					</div>
					<div class="work__img">
						<img src="assets/img/6.jpg" alt="" />
					</div>
				</div>
			</section>
		</main>

		<!--==== FOOTER ====-->
		<footer class="footer">
			<p class="footer__title">Bimbingan</p>
			<div class="footer__social">
				<a href="#" class="footer__icon">
					<i class="bx bxl-facebook"></i>
				</a>
				<a href="https://www.instagram.com/ichsan_011" class="footer__icon">
					<i class="bx bxl-instagram"></i>
				</a>
			</div>
			<p>&#169;2021 copyright all right reserved</p>
		</footer>

		<!--===== SCROLL REVEAL =====-->
		<script src="https://unpkg.com/scrollreveal"></script>

		<!--===== MAIN JS =====-->
		<script src="assets/js/index.js"></script>
	</body>
</html>
