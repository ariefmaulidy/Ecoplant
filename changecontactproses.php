<?php
include "connect.php";
	if(isset($_SESSION['id'])){
	$id = $_SESSION['id'];
	
	$email = $_POST['email'];
	$telp = $_POST['no_telp'];
	$result = mysqli_query($connect, "UPDATE user SET email='$email', no_telp='$telp' WHERE id_user='$id'");
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
	<script>document.location.href='chagecontact.php';</script>
	<?php
	}	
}