<!DOCTYPE html>
<html lang="en">
<head>
	<title>About</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">


			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.php" class="logo">
					<img src="images/icons/logo.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<span class="linedivide1"></span>
							<li>
								<a href="index.php">Beranda</a>
							</li>
							<span class="linedivide1"></span>
							<li>
								<a href="product.php">Produk</a>
							</li>
							<span class="linedivide1"></span>
							<li>
								<a href="blog.php">Blog</a>
							</li>
							<span class="linedivide1"></span>
							<li class="sale-noti">
								<a href="about.php">Informasi</a>
							</li>
							<span class="linedivide1"></span>


						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<!-- <a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a> -->



					<!-- <div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span> -->

					<!-- Header cart noti -->

				</div>
			</div>
		</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.php" class="logo-mobile">
				<img src="images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<!-- <a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a> -->

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<!-- <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span> -->

						<!-- Header cart noti -->

					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu">
			<nav class="side-menu">
				<ul class="main-menu">


					<li class="item-menu-mobile">
						<a href="index.php">Beranda</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.php">Produk</a>
					</li>

					<li class="item-menu-mobile">
						<a href="blog.php">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="about.php">Informasi</a>
					</li>

				</ul>
			</nav>
		</div>
	</header>



	<!-- content page -->
	<!-- Banner2 -->
	<section class="banner2 p-t-55 p-b-200 bgAb">
		<div class="container">
			<h1 class="t-center">
				INFORMASI
			</h1>
			<div class="row">
				<?php
				include 'admin/koneksi.php';
				$data = mysqli_query($conn,"select * from informasi");
				$d = mysqli_fetch_array($data);
				?>
				<div class="col-sm-12 col-md-12 col-lg-12 m-l-r-auto p-t-15 p-b-15">
					<div class="inAt">
						<h2>INFORMASI PEMBELIAN</h2>
						<br>
						<h3>
							<?php echo nl2br($d['pembelian']) ?>
						<h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6 m-l-r-auto p-t-15 p-b-15">
					<div class="inTe">
						<h2>PENTING</h2>
						<br>
						<h3>
							<?php echo nl2br($d['penting']) ?>
						<h3>
					</div>
				</div>

				<div class="col-sm-12 col-md-12 col-lg-6 m-l-r-auto p-t-15 p-b-15">
					<div class="inTe">
						<h2>Komplain / Retur</h2>
						<br>
						<h3>
							<?php echo nl2br($d['retur']) ?>
						<h3>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 m-l-r-auto p-t-15 p-b-15">
					<div class="inBa">
						<h2>ALAMAT</h2>
						<br>
						<h3>
					<?php echo nl2br($d['alamat']) ?><h3>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="bg1 p-t-45 p-b-3 p-l-45 p-r-45">
		<div class="p-b-90">
			<div class="t-center m-text9 p-t-20">
				GREENTECH SPAREPART <br> <a>by Jl. Kutilang No 4, Pekanbaru, Riau, Telp. 0827 7143 080</a><br>
				<img src="images/ico-ig.png"><img src="images/ico-fb.png">
			</div>

		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});


	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
