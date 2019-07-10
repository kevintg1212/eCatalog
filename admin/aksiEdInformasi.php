<!DOCTYPE html>
<html>
	<head>
		<title>Edit Informasi</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';


			$vpembelian= $_POST["pembelian"];
			$vpenting = $_POST["penting"];
			$vretur = $_POST["retur"];
			$valamat = $_POST["alamat"];
			$vid = 1;


					$query = mysqli_query($conn,"UPDATE informasi set pembelian='$vpembelian',penting='$vpenting',retur='$vretur',alamat='$valamat' where id_info='$vid'");
					if($query){
						header('location:informasi.php');
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
						echo mysqli_error($conn);
					}


		?>

		<br/>
		<br/>
		<br/>
		<br/>

	</body>
</html>
