<!DOCTYPE html>
<html>
	<head>
		<title>Edit Produk</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
			$file = $_FILES['file']['name'];
			$vid = $_POST["id_p"];
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
					$query = mysqli_query($conn,"UPDATE produk set nama_produk='$nama',harga_produk=$harga,kategori='$kategori',diskon=$diskon,best_seller='$best',nama_file='$file' where id_produk='$vid'");
					if($query){
						header('location:product.php');
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
						echo $query;
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				$query = mysqli_query($conn,"UPDATE produk set nama_produk='$nama',harga_produk=$harga,kategori='$kategori',diskon=$diskon,best_seller='$best' where id_produk='$vid'");
				if($query){
					header('location:product.php');
					echo 'FILE BERHASIL DI UPLOAD';
				}
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
