<?php
	$connect = mysqli_connect("localhost", "root", "", "ecoplant")
	or die ("Gagal koneksi ke server".mysqli_error());
	
	session_start ();
	if(!(isset($_SESSION['id'])))  //untuk ngecek apakah sessionnya ada atau tidak
		$_SESSION['id']= "nouser" ;
	if(!(isset($_SESSION['status'])))  //untuk ngecek apakah sessionnya ada atau tidak
		$_SESSION['status']= "nouser" ;
	
	?>