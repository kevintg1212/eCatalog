<!DOCTYPE html>
<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
  header("location: index.php"); // Kita Redirect ke halaman index.php karena belum login
}
 ?>
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
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
            <h1>Produk <small>Table</small>
                <a href="productNew.php" class="btn btn-success active float-right" role="button" aria-pressed="true" style="float:right">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>New Produk</a>
            </h1>
            <ol class="breadcrumb">
              <li><a href="product.php"><i class="icon-dashboard"></i> Admin</a></li>
              <li class="active"><i class="icon-file-alt"></i> Produk</li>
            </ol>

      <table class="table table-bordered table-hover table-striped tablesorter" id="table_id">


        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="table-responsive">
              <thead>
                <tr>
                  <th>Product Name </i></th>
                  <th>Harga (Rp.)</i></th>
                  <th>Kategori </i></th>
                  <th>Diskon </i></th>
                  <th>Best Seller </i></th>
                  <th>Action </i></th>
                </tr>
              </thead>
              <tbody>


                <?php
                include 'koneksi.php';
          			$data = mysqli_query($conn,"select * from produk");
          			while($d = mysqli_fetch_array($data)){
          			?>

                <tr>
                  <td><?php echo $d['nama_produk']; ?></td>
                  <td>Rp. <?php echo number_format($d['harga_produk'],2)."<br>"; ?></td>
                  <td><?php echo $d['kategori']; ?></td>
                  <td><?php echo $d['diskon']; ?> %</td>
                  <td><?php echo $d['best_seller']; ?></td>
                  <td>
                    <a href="productEd.php?id=<?php echo $d['id_produk'] ?>" class="btn btn-primary">Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $d['id_produk'] ?>">Delete</button>
                  </td>
                </tr>
                <!-- Modal -->
            <div class="modal fade" id="exampleModal<?php echo $d['id_produk'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Apakah anda yakin menghapus file ini ?</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    File yang dihapus tidak dapat dikembalikan lagi !
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="aksiDelPro.php?id=<?php echo $d['id_produk'] ?>" class="btn btn-danger">Delete</a>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
              </tbody>
            </table>
            </div>
            </div><!-- /.row -->
          </div>
        </div>
      </div><!-- /.row -->


      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->


    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script type="text/javascript">
    $(document).ready( function () {
  $('#table_id').DataTable();
} );
    </script>

  </body>
</html>
