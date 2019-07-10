<!DOCTYPE html>
<html>
	<head>
		<title>Delete Banner</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		$vid =$_GET['id'];

		$query = mysqli_query($conn,"DELETE from banner where id_banner=$vid");
		if($query){
			header('location:banner.php');
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
