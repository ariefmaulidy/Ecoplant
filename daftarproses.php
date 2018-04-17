<?php
	include "connect.php";
	
	$nama = $_POST['namauser'];
	$email = $_POST['emailuser'];
	$password = $_POST['passuser'];
	$tl = $_POST['birthuser'];
	$telp = $_POST['telpuser'];
	$alamat = $_POST['alamatuser'];
	$foto_size = $_FILES["photouser"]["size"];
	$folder = "images";
	$foto_loc = $_FILES["photouser"]["tmp_name"];
	$foto_name = $folder."/".$_FILES["photouser"]["name"];
	if($foto_size < 1000000){
		move_uploaded_file($foto_loc, $foto_name);
		$sql_tambah = "INSERT INTO user 
					   VALUES ('','$nama', '$email', '$password', '$telp', '$tl', '$alamat', '$foto_name')";
		mysqli_query($connect,$sql_tambah);
	?>
		<script language="javascript">alert("Register Successful");</script>
			<script>document.location.href='masuk.php';</script>
	<?php
	}
	else {
		?>
		<script language="javascript">alert("Register Failed");</script>
			<script>document.location.href='daftar.php';</script>
	<?php
	}
mysqli_close($connect);
?>
	