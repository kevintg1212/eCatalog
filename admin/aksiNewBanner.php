<!DOCTYPE html>
<html>
	<head>
		<title>New Banner</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
			$file = $_FILES['file']['name'];
			$x = explode('.', $file);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 10440700){
					move_uploaded_file($file_tmp, 'File/banner/'.$file);
					$query = mysqli_query($conn,"INSERT INTO banner (file) VALUES('$file')");
					if($query){
						header('location:banner.php');
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
						echo $query;
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

		<table>
			<?php
			$data = mysqli_query($conn,"select * from upload");
			while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td>
					<img src="<?php echo "File/banner/".$d['nama_file']; ?>">
				</td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>
