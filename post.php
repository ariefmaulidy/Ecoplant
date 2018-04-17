<?php
	include 'header.php';
  
	if(isset($_GET['id_tanaman'])){
		$qry = mysqli_query($connect, "SELECT * FROM tanaman WHERE id_tanaman = '".$_GET['id_tanaman']."'");
		$konten = mysqli_fetch_array($qry);
	}
	else{
		header("location: shop.php");
	}
?>
	<title><?php echo $konten['nama_tanaman']; ?></title>
	<br>
	<div class="container z-depth-3 blue lighten-5">
		<div class="row" style="font-family:Philosopher">
			<div class="col s11" style="margin-left:1%;">
				<h4><strong><?php echo $konten['nama_tanaman']; ?></strong></h4>
				<br><br><img class="postimg" src="images/<?php echo $konten['gambar']; ?>"><br>
				<?php echo $konten['cara_perawatan']; ?>
			</div>
		</div>
	</div>
<?php
	include 'footer.php';
?>