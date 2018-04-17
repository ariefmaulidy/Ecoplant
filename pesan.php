<?php
	include'connect.php';
	$id=$_GET['id'];
	$qry=mysqli_query($connect,"update verifikasi set status_konfirm=1 where id_verifikasi='$id'");
?>
	<script language="javascript">alert("Pesan telah dibaca!");</script>
	<script>document.location.href='message.php';</script>