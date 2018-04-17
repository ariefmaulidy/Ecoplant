<?php
	include 'connect.php';
?>
<html>
<head>
<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div class="header">
  	  		<div class="wrap">
				<div class="header_top">
						<div class="header_top_right">
							  
					</div>
			     <div class="clear"></div>
  		    </div>     
  		    <div class="navigation">
  		    	<a class="toggleMenu" href="#">Menu</a>
					<ul class="nav">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li  class="test">
							<a href="shop.php">Shop</a>
						</li> <?php if ($_SESSION['id']=="nouser"){ ?>
						<li>
							<a href="masuk.php">Login</a>
						</li>
						<li>
							<a href="daftar.php">Register</a>
						</li>
						<?php } else { ?>
						<li>
						<a href="profile.php">Profil</a>
						</li> 
						<li>
							<a href="logoutproses.php">Logout</a>
						</li> <?php } ?>
						<?php if($_SESSION['id']!="nouser") {?>
						<li>
							<a href="contact.php">Contact Us</a>
						</li>
						<?php } ?>
					</ul>
					 <span class="left-ribbon"> </span> 
      				 <span class="right-ribbon"> </span>    
  		    </div>
		</div>
		</div>
   <!------------End Header ------------>