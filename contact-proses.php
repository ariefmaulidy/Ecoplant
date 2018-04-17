<?php
	include 'connect.php';
	$id=$_POST['iduser'];
	$nama=$_POST['name'];
	$email=$_POST['email'];
	$msg=$_POST['message'];
	
	$sql_tambah = "INSERT INTO verifikasi(id_verifikasi,id_user, nama,email, msg) 
					   VALUES ('','$id','$nama','$email', '$msg')";
	mysqli_query($connect,$sql_tambah);
?>
	<script language="javascript">alert("Konfirmasi pembayaran telah diterima silakan tunggu tanaman anda sampai!");</script>
	<script>document.location.href='shop.php';</script>