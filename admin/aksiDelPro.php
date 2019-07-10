<!DOCTYPE html>
<html>
	<head>
		<title>Delete Produk</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		$vid =$_GET['id'];

		$query = mysqli_query($conn,"DELETE from produk where id_produk=$vid");
		if($query){
			header('location:product.php');
			echo 'FILE BERHASIL DI UPLOAD';
		}else{
			echo 'GAGAL MEN-DELETE FILE';
			echo $query;
		}

		?>

		<br/>
		<br/>
		<br/>
		<br/>

	</body>
</html>
