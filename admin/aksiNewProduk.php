<!DOCTYPE html>

<html>
	<head>
		<title>New Produk</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
			$file = $_FILES['file']['name'];
			$nama = $_POST["namaProduk"];
			$harga = $_POST["harga"];
			$kategori = $_POST["kategori"];
			$diskon= $_POST["diskon"];
			$best= $_POST["best"];
			$x = explode('.', $file);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 10440700){
					move_uploaded_file($file_tmp, 'File/produk/'.$file);
					$query = mysqli_query($conn,"INSERT INTO produk (nama_produk,harga_produk,kategori,diskon,best_seller,nama_file) VALUES('$nama',$harga,'$kategori',$diskon,'$best','$file')");
					if($query){
						header('location:product.php');
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
						header('location:productNew.php');
						echo $query;
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
					header('location:productNew.php');
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
				header('location:productNew.php');
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
					<img src="<?php echo "File/produk/".$d['nama_file']; ?>">
				</td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>
