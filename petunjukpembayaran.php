<?php
	include 'header.php';
	if($_SESSION['id']=="nouser"){ ?>
	<script>document.location.href='index.php';</script>
<?php } else {
	$id=$_SESSION['id'];
	$b=mysqli_query($connect,"select * from user where id_user='$id'");
	$result=mysqli_fetch_array($b);
	$nama=$result['nama_user'];
	$a=mysqli_query($connect,"select * from pemesanan where nama_pemesan='$nama' and status_pembayaran=0");
	$hasil=mysqli_fetch_array($a,MYSQLI_ASSOC);
?>
<title>Petunjuk pembayaran</title>
<div class="container">
	<div class="row">
		<h5>Petunjuk Pembayaran ECO Plant</h5>
		<ol>
			<li>Segera lakukan pembayaran ke rekening 2342135654 bank BNI atas nama ECO Plant sebesar <?php echo $hasil['total_harga'];?></li>
			<li>Jika sudah segera mengontak admin dengan mengirimkan pesan konfirmasi pembayaran pada kontak kami</li>
			<li>Tunggu konfirmasi pengiriman barang dari admin kami</li>
		</ol>
	</div>
</div>
<?php
include 'footer.php';}
?>