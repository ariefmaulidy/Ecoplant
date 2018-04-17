<?php 
	include'connect.php';
	
	$id = $_GET['id_tanaman'];
	
	$deletequery = mysqli_query($connect, "DELETE FROM tanaman WHERE id_tanaman='$id'");
	if($deletequery == TRUE)
	{ ?>
		<script language="javascript">alert("Berhasil Menghapus");</script>
		<script>document.location.href='hapus.php';</script>
	<?php } else { ?>
		<script language="javascript">alert("Gagal Menghapus");</script>
		<script>document.location.href='hapus.php';</script>
	<?php } ?>