<!DOCTYPE html>
<html>
	<head>
		<title>Edit Banner</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
			$file = $_FILES['file']['name'];
			$vid = $_POST["id_b"];
			$x = explode('.', $file);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 10440700){
					move_uploaded_file($file_tmp, 'File/banner/'.$file);
					$query = mysqli_query($conn,"UPDATE banner set file='$file' where id_banner='$vid'");
					if($query){
						header('location:banner.php');
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
						echo mysqli_error($conn);
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}
			}

		?>

		<br/>
		<br/>
		<br/>
		<br/>

	</body>
</html>
