<?php
include "connect.php";
	if(isset($_SESSION['id'])){
	$id = $_SESSION['id'];
	
	$oldpass = $_POST['oldpass'];
	$newpass = $_POST['newpass'];
	$confnewpass = $_POST['confnewpass'];
	$result = mysqli_query($connect, "SELECT * FROM user WHERE id_user='$id'");
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$row2 = $row['password'];
	if($oldpass == $row2){
		if ($newpass == $confnewpass){
			$result2 = mysqli_query($connect, "UPDATE user SET password='$confnewpass' WHERE id_user='$id'")
			?>
			<script language="javascript">alert("Password berhasil diubah");</script>
			<script> document.location.href='profile.php';</script>
			<?php
			
		}
		else{
			?>
			<script language="javascript">alert("Password baru dan konfirmasi baru tidak cocok");</script>
			<script> document.location.href='changepassword.php';</script>
			<?php
		}
	}
	else{
		?>
			<script language="javascript">alert("Password salah");</script>
			<script> document.location.href='changepassword.php';</script>
			<?php
	}
}