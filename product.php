<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
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
							<li class="sale-noti">
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

	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-3 p-b-50">
					<div class="leftbar p-r-50 p-r-0-sm pad-l50">
						<!--  -->
						<div class="blackBox">
						<h4 class="p-b-5">
							<b>Kategori</b>
						</h4>
					</div>

						<ul class="p-b-54">
						<div id="myBtnContainer">
							<li class="p-t-4">
								<div class="boxKat">
								<button id="Suspensi" class="s-text13 btn2 active1" onclick="filterSelection('Suspensi')">
								>	Suspensi
								</button>
							</div>
							</li>

							<li class="p-t-4">
								<div class="boxKat">
								<button id="Mesin" class="s-text13 btn2" onclick="filterSelection('Mesin')">
								>	Mesin
								</button>
								</div>
							</li>

							<li class="p-t-4">
								<div class="boxKat">
								<button id="Pengereman" class="s-text13 btn2" onclick="filterSelection('Pengereman')">
								>	Pengereman
								</button>
							</div>
							</li>

							<li class="p-t-4">
								<div class="boxKat">
								<button id="Knalpot" class="s-text13 btn2" onclick="filterSelection('Knalpot')">
								>	Knalpot
								</button>
							</div>
							</li>

							<li class="p-t-4">
								<div class="boxKat">
								<button id="Lainnya" class="s-text13 btn2" onclick="filterSelection('Lainnya')">
								>	Lainnya
								</button>
							</div>
							</li>
						</div>
						</ul>

						<!--  -->
						<!-- <h4 class="m-text14 p-b-32">
							Filters
						</h4> -->

					</div>
				</div>

				<div class="col-sm-12 col-md-12 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">


						<div class="blackBox">
						<h4 class="p-b-5">
							<b id ="p1">Suspensi</b>
						</h4>
					</div>
					</div>



					<!-- Product -->
					<div class="row">

						<?php
						include 'admin/koneksi.php';
						$data = mysqli_query($conn,"select * from produk");
						while($d = mysqli_fetch_array($data)){
						?>


						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50 filterDiv <?php echo $d['kategori'] ?>">
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

						<?php } ?>

			<!-- Pagination -->
					<!-- <div class="pagination flex-m flex-w p-t-26">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div> -->
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

	<div class="bg10 p-t-10 p-b-20 p-l-45 p-r-45">

	</div>

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
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "Produk di sukai !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
	<script>
filterSelection("Suspensi")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}



function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn2");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active1");
    current[0].className = current[0].className.replace(" active1", "");
    this.className += " active1";
		document.getElementById("p1").innerHTML = this.id;
  });
}
</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
