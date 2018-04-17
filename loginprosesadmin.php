<?php
	include 'connect.php';
	
	$email = $_POST['email'];//dapetin data email sesuai dengan nama atribut
	$password = $_POST ['password'];
	
	$result	= mysqli_query ($connect, "SELECT * FROM admin WHERE email_admin = '$email' and password_admin= '$password'") ;
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC); //lu fetching(ngambil satu2) data yang ada database, array karena databes bentuknya array
	
	IF ($row) {
			$_SESSION ['id'] = $row['id_admin'] ;//sesion untuk mengenali ada akun atau ngga
			$_SESSION ['status'] = "admin";
			?>
				<script language = "javascript" > alert ("logging successfull"); </script>
				<script> document.location.href = 'admin.php' ; </script>
			<?php
	}
	else{
		?>
			<script language ="javascript"> alert("logging unsuccessful"); </script>
				<script> document.location.href = 'adminlogin.php' ; </script>
		<?php
	}
		mysqli_close ($connect);
		
	
	
?>