<?php 
include 'connect.php'; 
if($_SESSION['status']!="admin"){ ?>
			<script language="javascript">alert("Anda tidak memiliki hak ases!");</script>
			<script>document.location.href='index.php';</script>
<?php } ?>
<?php
$result=mysqli_query($connect,"select * from tanaman order by id_tanaman asc");
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

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
<title>ADMIN</title>
 <div class="main">
      <div class="content">	       
    	  <div class="content_bottom">
    	    <div class="wrap">
    	    	<div class="content-bottom-left">
    	    		<div class="categories">
						   <ul>
						  	   <h3>Menu ADMIN</h3>
							      <li><a href="admin.php">Verifikasi Pembelian</a></li>
								  <li><a href="message.php">Tabel Pesan</a></li>
							      <li><a href="tambah.php">Tambah Tanamanan</a></li>
								  <li><a href="hapus.php">Hapus Tanamanan</a></li>
								  <li><a href="logoutproses.php">Logout</a></li>
						  	 </ul>
						</div>		
						<div class="buters-guide">
						<h3>ADMIN Guide</h3>
						<p><span>Silahkan verifikasi pembelian yang belum diverifikasi</span></p>							
					  </div>	
					  
    	    	</div>
    	    	
    	    	<div class="content-bottom-right">
    	    	<h3>ECO Plant</h3>
				<div class="row">
					<?php
					$limit=0;
					if(isset($_GET['hal'])){
						for($i=1;$i<$_GET['hal'];$i++){
							$limit +=12;
						}
					}
					$kueri=mysqli_query($connect,"select * from tanaman limit $limit,12");
					
					while($hasil=mysqli_fetch_array($kueri,MYSQLI_ASSOC)){
						echo
								'<div class="col s3">'.
									'<h4>'.$hasil['nama_tanaman'].'</h4>'.
									'<img src="images/'.$hasil['gambar'].'" width=150px height=150px>'.
									'<p>Rp '.$hasil['harga_tanaman'].'</p>'.
									'<a href="hapusproses.php?id_tanaman='.$hasil['id_tanaman'].'"><button class="btn waves-effect waves orange darken-4">Hapus</button></a>'.
								'</div>';
					}?>
			</div>
				<?php
					if(isset($_GET['hal'])){
						$next=$_GET['hal']+1;
						$prev=$_GET['hal']-1;
					}
					else{
						$next=2;
						$prev=0;
					}
					?><div style="margin:30px,0px"><?php
					
					if($prev>0){ ?>
					<a class="waves-effect waves-light btn z-depth-2 orange darken-4" href="?hal=<?php echo $prev ?>" style="float: left; padding-left: 25px; padding-right: 25px;">Prev</a>
					<?php }
					$limit+=12;
					$kueri=mysqli_query($connect,"select * from tanaman limit $limit,12");
					if(mysqli_num_rows($kueri)!=0){?>
						<a class="waves-effect light btn z-depth-2 orange darken-4" href="?hal=<?php echo $next; ?>" style="float:right; padding-left:25px; padding-right:25px;">Next</a>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<?php
	include 'footer.php';
?>