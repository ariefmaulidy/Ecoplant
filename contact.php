<?php
	include 'header.php';
?>
<title>ECO Plant About and Contact Us </title>
 <div class="main">
 	<div class="wrap">
     <div class="preview-page">
				  <div class="contact-form">
				  <?php if($_SESSION['id']!="nouser") { 
				  $id=$_SESSION['id'];
				  $qry=mysqli_query($connect,"select * from user where id_user='$id'");
				  $hasil=mysqli_fetch_array($qry,MYSQLI_ASSOC);
				  ?>
				  	<h3>Konfirmasi Pembayaran</h3>
					    <form method="post" action="contact-proses.php" method="post" enctype="multipart/form-data">
					    	<div>
								<input name="iduser" type="text" class="hide" value=<?php echo $_SESSION['id']?>">
						    	<input name="name" type="text" class="textbox textbox1" value="<?php echo $hasil['nama_user']?>">
						    	<input name="email" type="text" class="textbox" value="<?php echo $hasil['email']?>">
						    	<div class="clear"></div>
						    </div>
						    <div>
						    	<span><textarea name="message"></textarea></span>
						    </div>
						   <div>
						   		<button class="btn waves-effect waves orange darken-4" type="submit" value="submit">Kirim
									<i class="material-icons right">send</i>
								</button>
						   		<div class="clear"></div>
						  </div>
					    </form>
				  <?php } ?>
				  </div>
	  </div>		
     </div> 
 </div>
<?php
	include 'footer.php'
?>