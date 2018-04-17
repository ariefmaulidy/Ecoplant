<?php
	include "connect.php";
	
	$nama_tanaman = $_POST['nama_tanaman'];
	$jenis_tanaman = $_POST['jenis_tanaman'];
	$harga_tanaman = $_POST['harga_tanaman'];
	$cara_perawatan = $_POST['cara_perawatan'];
	$stok = $_POST['stok'];
	$foto_size = $_FILES["gambar"]["size"];
	$folder = "images";
	$foto_loc = $_FILES["gambar"]["tmp_name"];
	$foto_name = $_FILES["gambar"]["name"];
	if($foto_size < 1000000){
		move_uploaded_file($foto_loc, $foto_name);
		$sql_tambah = "INSERT INTO tanaman 
					   VALUES ('','$nama_tanaman', '$jenis_tanaman', '$harga_tanaman', '$cara_perawatan', '$foto_name', '$stok')";
		mysqli_query($connect,$sql_tambah);
	?>
		<script language="javascript">alert("Tambah Berhasil");</script>
			<script>document.location.href='admin.php';</script>
	<?php
	}
	else {
		?>
		<script language="javascript">alert("Tambah Gagal");</script>
			<script>document.location.href='tambah.php';</script>
	<?php
	}
mysqli_close($connect);
?>
	