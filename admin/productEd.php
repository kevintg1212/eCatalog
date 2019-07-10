<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
  header("location: index.php"); // Kita Redirect ke halaman index.php karena belum login
}
if(!$_GET['id']) {
header("Location: product.php");
}
  $vid =$_GET['id'];
  include 'koneksi.php';
  $data = mysqli_query($conn,"select * from produk where id_produk = $vid");
  $d = mysqli_fetch_array($data)

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Produk</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="../images/icons/favicon.png" />

  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="product.php">Admin Menu</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="product.php"><i class="fa fa-wrench"></i> Produk</a></li>
            <li><a href="blog.php"><i class="fa fa-edit"></i> Blog</a></li>
            <li><a href="informasi.php"><i class="fa fa-font"></i> Informasi</a></li>
            <li><a href="banner.php"><i class="fa fa-desktop"></i> Banner</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="aksiLogout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Edit</h1>
            <ol class="breadcrumb">
              <li><a href="product.php"><i class="icon-dashboard"></i> Admin</a></li>
              <li><a href="product.php"><i class="icon-file-alt"></i> Produk</a></li>
              <li class="active"><i class="icon-file-alt"></i> <?php echo $d['nama_produk']; ?></li>
            </ol>
          </div>
        </div><!-- /.row -->

        <div class="row">
            <form role="form" action="aksiEdPro.php" method="post" enctype="multipart/form-data">
              <div class="col-lg-6 col-lg-12">
              <div class="form-group">
                <label>Nama Produk</label>
                <input class="form-control" name="namaProduk" value="<?php echo $d['nama_produk']; ?>">
                <!-- <p class="help-block">Example block-level help text here.</p> -->
              </div>


                <label>Harga</label>
                <div class="form-group input-group">
                <span class="input-group-addon">Rp.</span>
                <input type="text" class="form-control" value="<?php echo $d['harga_produk']; ?>" name="harga">
                <span class="input-group-addon">.00</span>
              </div>

              <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                  <option
                  <?php
                  if($d['kategori']=='Suspensi') {
                    echo "Selected";
                  }
                    ?>
                  >Suspensi</option>

                  <option

                  <?php
                  if($d['kategori']=='Mesin') {
                    echo "Selected";
                  }
                    ?>

                  >Mesin</option>

                  <option

                  <?php
                  if($d['kategori']=='Pengereman') {
                    echo "Selected";
                  }
                    ?>

                  >Pengereman</option>

                  <option

                  <?php
                  if($d['kategori']=='Knalpot') {
                    echo "Selected";
                  }
                    ?>

                  >Knalpot</option>

                  <option

                  <?php
                  if($d['kategori']=='Lainnya') {
                    echo "Selected";
                  }
                    ?>

                  >Lainnya</option>

                </select>
              </div>


                <label>Diskon</label>
                <div class="form-group input-group">
                <input type="text" class="form-control" value="<?php echo $d['diskon']; ?>" name="diskon">
                <span class="input-group-addon"> %</span>
              </div>

              <div class="form-group">
                <label>Best Seller</label>
                <select class="form-control" name="best">
                  <option

                  <?php
                  if($d['best_seller']=='No') {
                    echo "Selected";
                  }
                    ?>

                  >No</option>

                  <option

                  <?php
                  if($d['best_seller']=='Yes') {
                    echo "Selected";
                  }
                    ?>

                  >Yes</option>
                </select>
              </div>
            </div>

            <div class="col-lg-6 col-md-12">
            <div class="form-group">
              <label>Gambar Produk</label>
                <input type="file" name="file" onchange="readURL(this);">
            </div>

            <img class="img-thumbnail" style="width:300px"  id="blah" src="File/produk/<?php echo $d['nama_file']; ?>" alt="your image" />
            <input type="text" name="id_p" value="<?php echo $d['id_produk']; ?>" class="hidden-lg">
            </div>
            </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12" style="padding-top:10px">
              <input type="submit" name="upload" value="Save" class="btn btn-primary btn-lg btn-block">

            </div>
          </form>

        </div>

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

  </body>
<script type="text/javascript">
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $("#blah").attr("src", e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}


function required()
{
var empt = document.forms["form1"]["namaProduk"].value;
var empt2 = document.forms["form1"]["harga"].value;
var fuData = document.getElementById('fileChooser');
var FileUploadPath = fuData.value;



if (empt == "")
{
alert("Tolong isi Nama Produk");
return false;
}else if (empt2 == "")
{
alert("Tolong isi Harga");
return false;
}
      else if (FileUploadPath == '') {
            alert("Tolong untung mengupload gambar");
            return false;
        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
              if ( Extension == "png" || Extension == "jpeg" || Extension == "jpg") {
                return true;
            } else {
                alert("Gambar yang diperbolehkan ber-ekstensi : PNG, JPG, dan JPEG. ");
                return false;
            }
          }
        }

</script>

</html>
