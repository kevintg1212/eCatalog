<!DOCTYPE html>
<html>
	<head>
		<title>Edit Blog</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
			$file = $_FILES['file']['name'];
			$vjudul = $_POST["judul"];
			$vsortDesc = $_POST["sortDesc"];
			$vlongDesc = $_POST["longDesc"];
			$vid = $_POST["id_b"];
			$x = explode('.', $file);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];
			$now = date("Y-m-d");

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 10440700){
					move_uploaded_file($file_tmp, 'File/blog/'.$file);
					$query = mysqli_query($conn,"UPDATE blog set judul_artikel='$vjudul',vsort='$vsortDesc',vlong='$vlongDesc',vdate='$now',file='$file' where id_blog='$vid'");
					if($query){
						header('location:blog.php');
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
						echo mysqli_error($conn);
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				$query = mysqli_query($conn,"UPDATE blog set judul_artikel='$vjudul',vsort='$vsortDesc',vlong='$vlongDesc',vdate='$now' where id_blog='$vid'");
				if($query){
					header('location:blog.php');
					echo mysqli_error($conn);
					echo $vjudul;
					echo $vid;
					echo 'FILE BERHASIL DI UPLOAD';
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
