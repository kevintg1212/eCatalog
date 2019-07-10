<!DOCTYPE html>

<html>
	<head>
		<title>New Blog</title>
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
			$x = explode('.', $file);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];
			$now = date("Y-m-d");

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 10440700){
					move_uploaded_file($file_tmp, 'File/blog/'.$file);
					$query = mysqli_query($conn,"INSERT INTO blog (judul_artikel,vsort,vlong,vdate,file) VALUES('$vjudul','$vsortDesc','$vlongDesc','$now','$file')");
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
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
		}
		?>

		<br/>
		<br/>
		<br/>
		<br/>

	</body>
</html>
