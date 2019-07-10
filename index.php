<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png" />
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
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
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
							<li class="sale-noti">
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
							<li>
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

	<!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">

				<?php
				include 'admin/koneksi.php';
				$data = mysqli_query($conn,"select * from banner");
				while($d = mysqli_fetch_array($data)){
				?>

				<div class="item-slick1 item1-slick1" style="background-image: url(images/<?php echo $d['file'] ?>);">
					<div class="wrap-content-slide1 sizefull flex-col-r-m p-l-0a p-r-0 p-t-280 p-b-170" style="position:relative;  white-space: nowrap;  overflow: hidden;">
						<div class="blur">

							<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
								LOREM IPSUM
							</h2>
							<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
								AUTO PARTS SOLUTION
							</span>

							<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">

							</div>
						</div>
					</div>
				</div>
			<?php } ?>

		</div>
		</div>

	</section>



	<section class="banner2 bg10 p-t-55 p-b-0">
		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-md-8 col-lg-6 m-l-auto p-t-15 p-b-0">
					<div class="hov-img-zoom pos-relative">
						<img src="images/brake-1.png" alt="IMG-BANNER">
					</div>
					<div class="KiAt">
						<h1><b>BRAKE</b></h1>
						<h4><b>SYSTEMS</b></h4>
					</div>

				</div>



				<div class="col-sm-9 col-md-8 col-lg-6 m-r-auto p-t-15 p-b-15">
					<div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm">
						<img src="images/engine-1.png" alt="IMG-BANNER">
						<div class="KaAt">
							<h1><b>ENGINE</b></h1>
							<h4><b>PARTS</b></h4>
						</div>

					</div>
				</div>
			</div>
		</div>
		</div>
		</div>
	</section>


	<section class="banner2 bg10 p-t-0 p-b-55">
		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-md-8 col-lg-6 m-l-auto p-t-15 p-b-15">
					<div class="hov-img-zoom pos-relative">
						<img src="images/exaust-1.png" alt="IMG-BANNER">
						<div class="KiBa">
							<h1><b>EXHAUST</b></h1>
							<h4><b>SYSTEMS</b></h4>
						</div>
					</div>

				</div>

				<div class="col-sm-9 col-md-8 col-lg-6 m-r-auto p-t-15 p-b-15">
					<div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm">
						<img src="images/suspen-1.png" alt="IMG-BANNER">

						<div class="ab-t-l sizefull flex-col-c-b p-l-15 p-r-15 p-b-20">
							<div class="KaBa">
								<h1><b>SUSPENSION</b></h1>
								<h4><b>SYSTEMS</b></h4>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		</div>
	</section>


	<!-- Banner2 -->
	<section class="banner2 p-t-50 p-b-250 selamat">
		<div class="container">
			<div class="row">
				<div class="textSelamat">
					<h1><b>SELAMAT DATANG</b></h1>
					<h5><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
						aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
						eu fugiat nulla pariatur.</b></h5>
				</div>
			</div>
		</div>
	</section>



	<!-- New Product -->
	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">
			<div class="unggulan">
			<div class="sec-title p-b-40 bg1">
				<h3 class="m-text9 t-left">
					Produk Unggulan
				</h3>
			</div>

		</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">



						<?php
						include 'admin/koneksi.php';
						$data = mysqli_query($conn,"select * from produk where diskon > 0 or best_seller='Yes'");
						while($d = mysqli_fetch_array($data)){
						?>

					<div class="item-slick2 p-l-15 p-r-15">
						<div class="filterDiv <?php echo $d['kategori'] ?> show">
							<!-- Block2 -->
							<div class="block2 mid">
								<?php
								if ($d['diskon']!=0 && $d['best_seller']=='No') {?>
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labeldiskon" style="height:280px">
									<div class=" block2-labelpercent">
									<a><?php echo $d['diskon'] ?>%</a>
									</div>
								<?php } else if ($d['diskon']==0 && $d['best_seller']=='Yes') { ?>
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew block2-labelbest text-center" style="height:280px">

								<?php	} else if ($d['diskon']!=0 && $d['best_seller']=='Yes') {  ?>
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew block2-labeldisbest text-center" style="height:280px">
										<div class=" block2-labelpercent">
										<a><?php echo $d['diskon'] ?>%</a>
										</div>

								<?php } else { ?>
										<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnewtext-center" style="height:280px">
								<?php	} ?>
									<img src="admin/File/produk/<?php echo $d['nama_file'] ?>" alt="IMG-PRODUCT" class="img-responsive center-block">

									<div class="block2-overlay trans-0-4">
								
									</div>
								</div>


								<div class="block2-txt p-t-20">
									<a href="admin/File/produk/<?php echo $d['nama_file'] ?>" target="_blank" class="block2-name dis-block s-text3 p-b-5">
										<?php echo $d['nama_produk'] ?>
									</a>

									<?php
									if ($d['diskon']==0)
									{?>

									<span class="block2-price m-text6 p-r-5">
										Rp. <?php echo number_format($d['harga_produk'],2)."<br>"; ?>
									</span>

								<?php	} else {?>
									<span class="block2-oldprice m-text7 p-r-5">
									Rp. <?php echo number_format($d['harga_produk'],2)."<br>"; ?>
									</span>
									<span class="block2-newprice m-text8 p-r-5">
									Rp. <?php echo number_format($d['harga_produk']-($d['harga_produk']*$d['diskon']/100),2)."<br>"; ?>
									</span>
								<?php } ?>
								</div>
							</div>
						</div>
					</div>

				<?php } ?>

	</div>
</div>
</div>
		</div>
		</div>
	</section>

	<!-- Banner2 -->
	<section class="banner2 p-t-55 p-b-150 bgBlog">
		<div class="container">
			<h1 class="t-center">
				BLOG
			</h1>
			<div class="row">
				<?php
				include 'admin/koneksi.php';
				$data = mysqli_query($conn,"select id_blog,YEAR(vdate),MONTHNAME(vdate),DATE(vdate),judul_artikel,vsort,file from blog ORDER BY id_blog DESC limit 2");

				while($d = mysqli_fetch_array($data)){
				?>

				<div class="col-sm-10 col-md-8 col-lg-5 m-l-r-auto p-t-15 p-b-15">
					<div style="height:300px; background-color:black;" class="hov-img-zoom pos-relative">
						<img src="admin/File/blog/<?php echo $d['file']?>" alt="IMG-BANNER" class="img-responsive center-block">
						<div class="KiBa3">
							<h5><b><?php echo $d['judul_artikel']?></b></h5>
								<h5><?php echo date_format(date_create($d['DATE(vdate)']),"d/m/Y");?>
								</h5>
						</div>

					</div>
				</div>
			<?php } ?>

				<!-- <div class="col-sm-10 col-md-8 col-lg-5 m-l-r-auto p-t-15 p-b-15">
					<div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm borderH">
						<img src="images/shop-item-10.jpg" alt="IMG-BANNER">
						<div class="KiBa3">
							<h5><b>Dakar: Stage I, Awal yang baik untuk Sunderland</b></h4>
						</div>
					</div>
				</div> -->
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

	<div class="bg10 p-t-10 p-b-20 p-l-45 p-r-45">

	</div>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



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
	</script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function() {
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').php();
			$(this).on('click', function() {
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function() {
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').php();
			$(this).on('click', function() {
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>
