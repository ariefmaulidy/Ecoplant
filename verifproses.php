<?php
	include'connect.php';
	$id=$_GET['id'];
	$qry=mysqli_query($connect,"update pemesanan set status_pembayaran=1 where id_pemesanan='$id'");
?>
	<script language="javascript">alert("Pembayaran telah dikonfirmasi!");</script>
	<script>document.location.href='admin.php';</script>