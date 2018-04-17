<?php
include "connect.php";
	if(isset($_SESSION['id'])){
	$id = $_SESSION['id'];
	
	$nama = $_POST['nama'];
	$birth = $_POST['birth'];
	$alamat = $_POST['alamat'];
	$result = mysqli_query($connect, "UPDATE user SET nama_user='$nama', tanggal_lahir='$birth', alamat='$alamat' WHERE id_user='$id'");
	if($result){
		?>
		<script language="javascript">alert("Informasi umum berhasil diubah");</script>
		<script>document.location.href='profile.php';</script>
		<?php
}
else{
	?>
	<script language="javascript">
	alert("Informasi umum gagal diubah, silahkan isi dengan benar");</script>
	<script>document.location.href='chagegeneral.php';</script>
	<?php
	}	
}