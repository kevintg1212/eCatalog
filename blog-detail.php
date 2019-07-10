<!DOCTYPE html>
<?php
if(!$_GET['id']) {
header("Location: blog.php");
}
?>
<html lang="en">
<head>
	<title>Blog Details</title>
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
							<li class="sale-noti">
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
					<span class="linedivide2"></span>

					<div class="header-wrapicon2">

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

	<!-- content page -->
	<section class="bgwhite p-t-60">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-50 p-r-0-sm pad-l50">
						<!--  -->
						<div class="blackBox">
						<h4 class="p-b-5">
							<b>Arsip</b>
						</h4>
					</div>

          <ul class="p-b-54">
            <div id="myBtnContainer">
            <?php
            include 'admin/koneksi.php';
            $data = mysqli_query($conn,"SELECT DISTINCT YEAR(vdate) from blog");
            while($d = mysqli_fetch_array($data)){
              $vv = $d['YEAR(vdate)'];
            ?>
            <li class="p-t-4">
              <div class="boxKat">
              <button id="<?php echo $d['YEAR(vdate)'];?>" class="s-text13 btn2" onclick="filterSelection('<?php echo $d['YEAR(vdate)'];?>')">
              >	<?php echo $d['YEAR(vdate)'];?>
            </button>
            </div>
            </li>
            <?php
            include 'admin/koneksi.php';
            $data2 = mysqli_query($conn,"SELECT DISTINCT MONTHNAME(vdate) from blog where YEAR(vdate)='$vv'");
            while($d2 = mysqli_fetch_array($data2)){
              $tt = $d2['MONTHNAME(vdate)'];
            ?>
            <li class="p-t-4">
              <div class="boxKat">
              <button id="<?php echo $d2['MONTHNAME(vdate)'];?>" class="s-text13 btn3 filterDiv <?php echo $vv;?>" onclick="filterSelection2('<?php echo $vv;?> <?php echo $tt;?>')">
              <div style="margin-left:10px;"><?php echo $d2['MONTHNAME(vdate)'];?></div>
            </button>
            </div>
            </li>

          <?php } }?>
          </div>
          </ul>

			<?php
        $vid =$_GET['id'];
        include 'admin/koneksi.php';
        $data = mysqli_query($conn,"select * from blog where id_blog = $vid");
        $d = mysqli_fetch_array($data) ?>

					</div>
				</div>
				<div class="col-md-8 col-lg-9 p-b-75">
					<div class="p-r-50 p-r-0-lg">

					<div class="blackBox">
						<h4 class="p-b-5">
							<b>Artikel</b>
						</h4>
					</div>

						<!-- item blog -->
						<div class="item-blog p-b-80 p-t-30">
							<a class="item-blog-img pos-relative dis-block hov-img-zoom">
									<div class="hov-img-zoom pos-relative">
										<img src="images/<?php echo $d['file']?>" alt="IMG-BLOG">
									</div>
									<div class="KiBa2">
										<h2><b><?php echo $d['judul_artikel']?></b></h4>
									</div>
							</a>

							<div class="item-blog-txt p-t-33">



								<div class="p-b-12">
								<?php echo $d['vlong']?>
							</div>
							</div>
						</div>


					</div>


				</div>

				<div class="col-md-4 col-lg-3 p-b-75">
					<div class="rightbar">



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
	<!--===============================================================================================-->
		<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
		<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
		<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
		<script type="text/javascript" src="js/slick-custom.js"></script>
	<!--===============================================================================================-->
		<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
		<script type="text/javascript">
			$('.block2-btn-addcart').each(function(){
				var nameProduct = $(this).parent().parent().parent().find('.block2-name').php();
				$(this).on('click', function(){
					swal(nameProduct, "is added to cart !", "success");
				});
			});

			$('.block2-btn-addwishlist').each(function(){
				var nameProduct = $(this).parent().parent().parent().find('.block2-name').php();
				$(this).on('click', function(){
					swal(nameProduct, "is added to wishlist !", "success");
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
	<!--===============================================================================================-->
		<script src="js/main.js"></script>
    <?php
      $vid =$_GET['id'];
      include 'admin/koneksi.php';
      $data = mysqli_query($conn,"select id_blog,YEAR(vdate),MONTHNAME(vdate),DATE(vdate),judul_artikel,vsort,file from blog where id_blog = $vid");
      $d = mysqli_fetch_array($data) ?>
    <script>
  filterSelection("<?php echo $d['YEAR(vdate)'] ?>")
  var element = document.getElementById("<?php echo $d['YEAR(vdate)'] ?>");
  element.classList.add("active1");
  var element2 = document.getElementById("<?php echo $d['MONTHNAME(vdate)'] ?>");
  element2.classList.add("active2");

  function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "All") c = "";
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "show");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
  }



  function w3AddClass(element, name) {
    var i, arr1, arr2, arr3;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");

    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {element.className  += " " + arr2[i];}
    }
  }

  function w3RemoveClass(element,  name) {
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
  var btns2 = btnContainer.getElementsByClassName("btn3");
  var tempp = "";

  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
      var current = document.getElementsByClassName("active1");
      current[0].className = current[0].className.replace(" active1", "");
      this.className += " active1";
      temp = this.id;
      window.location.href = 'blog.php';
    });
  }
  for (var i = 0; i < btns2.length; i++) {
    btns2[i].addEventListener("click", function(){
      var current = document.getElementsByClassName("active2");
      current[0].className = current[0].className.replace(" active2", "");
      this.className += " active2";
      window.location.href = 'blog.php';
    });
  }
  </script>

  <script>
filterSelection2("<?php echo $d['YEAR(vdate)'] ?> <?php echo $d['MONTHNAME(vdate)'] ?>")
var element3 = document.getElementById("<?php echo $d['YEAR(vdate)'] ?> <?php echo $d['MONTHNAME(vdate)'] ?>");
element3.classList.add("active1");

function filterSelection2(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv2");
  if (c == "All") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass2(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass2(x[i], "show");
  }
}



function w3AddClass2(element3, name) {
  var i, arr1, arr2, arr3;
  arr1 = element3.className.split(" ");
  arr2 = name.split(" ");

  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element3.className  += " " + arr2[i];}
  }
}

function w3RemoveClass2(element3,  name) {
  var i, arr1, arr2;
  arr1 = element3.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element3.className = arr1.join(" ");
  window.location.href = 'blog.php';
}


</script>

</body>
</html>
