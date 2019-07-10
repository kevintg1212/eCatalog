<!DOCTYPE html>
<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
  header("location: index.php"); // Kita Redirect ke halaman index.php karena belum login
}

  include 'koneksi.php';
  $data = mysqli_query($conn,"select * from informasi");
  $d = mysqli_fetch_array($data)

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
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
            <li><a href="product.php"><i class="fa fa-wrench"></i> Produk</a></li>
            <li><a href="blog.php"><i class="fa fa-edit"></i> Blog</a></li>
            <li class="active"><a href="informasi.php"><i class="fa fa-font"></i> Informasi</a></li>
            <li><a href="banner.php"><i class="fa fa-desktop"></i> Banner</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="product.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="../index.html"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Edit <small>Informasi</small></h1>
            <ol class="breadcrumb">
              <li><a href="product.php"><i class="icon-dashboard"></i> Admin</a></li>
              <li class="active"><i class="icon-file-alt"></i> Informasi</li>
            </ol>
          </div>
        </div><!-- /.row -->

        <div class="row">
            <form role="form" action="aksiEdInformasi.php" method="post" enctype="multipart/form-data">
              <div class="col-lg-12 col-lg-12">
              <div class="form-group">
                <label>INFORMASI PEMBELIAN</label>
                <textarea rows="10" id="summernote" class="form-control" name="pembelian"><?php echo $d['pembelian']; ?></textarea>
                <!-- <p class="help-block">Example block-level help text here.</p> -->

              </div>

              <div class="form-group">
                <label>PENTING</label>
                <textarea rows="10" id="summernote" class="form-control" name="penting"><?php echo $d['penting']; ?></textarea>
                <!-- <p class="help-block">Example block-level help text here.</p> -->
              </div>

              <div class="form-group">
                <label>Komplain / Retur</label>
                <textarea rows="10" id="summernote" class="form-control" name="retur"><?php echo $d['retur']; ?></textarea>
                <!-- <p class="help-block">Example block-level help text here.</p> -->
              </div>

              <div class="form-group">
                <label>ALAMAT</label>
                <textarea rows="10" id="summernote" class="form-control" name="alamat"><?php echo $d['alamat']; ?></textarea>
                <!-- <p class="help-block">Example block-level help text here.</p> -->
              </div>
          </div>

            </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-top:10px">
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


function textCounter(field,field2,maxlimit)
{
 var countfield = document.getElementById(field2);
 if ( field.value.length > maxlimit ) {
  field.value = field.value.substring( 0, maxlimit );
  return false;
 } else {
  countfield.value = maxlimit - field.value.length;
 }
}

</script>
</html>
