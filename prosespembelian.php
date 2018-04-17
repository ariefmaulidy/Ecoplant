<?php
	include 'connect.php';
	$idu=$_SESSION['id'];
	$idt=$_GET['id_tanaman'];
	$banyak=$_POST['banyak'];
	$qry=mysqli_query($connect,"select * from tanaman where id_tanaman='$idt'");
	$result=mysqli_fetch_array($qry,MYSQLI_ASSOC);
	$kueri=mysqli_query($connect,"select * from user where id_user='$idu'");
	$hasil=mysqli_fetch_array($kueri,MYSQLI_ASSOC);
	$nama=$hasil['nama_user'];
	$alamat=$hasil['alamat'];
	$tanaman=$result['nama_tanaman'];
	if($result['stok']-$banyak>0){
		$total=$banyak*$result['harga_tanaman'];
		$sql_tambah = "INSERT INTO pemesanan VALUES ('','$nama','$alamat', '$tanaman', '$banyak','$total','0')";
		mysqli_query($connect,$sql_tambah);
		$query= mysqli_query($connect, "UPDATE tanaman SET stok=stok-'$banyak' WHERE id_tanaman = '$idt'");
	?>
	<script language="javascript">alert("Proses berhasil segera lakukan pembayaran");</script>
	<script>document.location.href='petunjukpembayaran.php';</script>
	<?php } else { ?>
	<script language="javascript">alert("Maaf stok sudah habis");</script>
	<script>document.location.href='index.php';</script>
	<?php } ?>