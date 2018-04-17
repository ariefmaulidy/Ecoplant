<?php
	include "connect.php";
	if(isset($_SESSION['id'])) {
    $id = $_SESSION['id'];

	$folder =  "user/images";
	$fotoo = $_FILES["photo"]["tmp_name"];
	$name = $folder."/".$_FILES["photo"]["name"];

	move_uploaded_file($fotoo, $name); 
	
	$result2=mysqli_query($connect, "UPDATE user SET photouser='$name' WHERE id_user='$id'");
	if ($result2) {
		?>
			<script language="javascript">alert("Photo berhasil diubah");</script>
			<script>document.location.href='profile.php';</script>
		<?php
	}	
	else {
		?>
			<script language="javascript">alert("Photo gagal diubah");</script>
			<script>document.location.href='profile.php';</script>
		<?php
	}

}
?>