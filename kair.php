<?php 
include 'header.php'; 
$result=mysqli_query($connect,"select * from tanaman order by id_tanaman desc");
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<title>ECO Plant Shop </title>
  <div class="main">
      <div class="content">	       
    	  <div class="content_bottom">
    	    <div class="wrap">
    	    	<div class="content-bottom-left">
    	    		<div class="categories">
						   <ul>
						  	   <h3>Browse All Categories</h3>
							      <li><a href="kbunga.php">Tanamn Hias Bunga</a></li>
							      <li><a href="kdaun.php">Tanamn Hias Daun</a></li>
							      <li><a href="kair.php">Tanaman Air</a></li>
							      
						  	 </ul>
						</div>		
						<div class="buters-guide">
						<h3>Buyers Guide</h3>
						<p><span>Silahkan memilih sesuai pilihan anda</span></p>	
						<p>Sesuaikan tanamn yang anda pilih dengan lingkungan anda </p>
					  </div>	
					  
    	    	</div>
    	    	
    	    	<div class="content-bottom-right">
    	    	<h3>Tanaman Hias Air</h3>
				<div class="row">
					<?php
					$limit=0;
					if(isset($_GET['hal'])){
						for($i=1;$i<$_GET['hal'];$i++){
							$limit +=12;
						}
					}
					$kueri=mysqli_query($connect,"select * from tanaman where jenis_tanaman='tanaman air' limit $limit,12");
					while($hasil=mysqli_fetch_array($kueri,MYSQLI_ASSOC)){
						echo
								'<div class="col s3">'.
									'<h4>'.$hasil['nama_tanaman'].'</h4>'.
									'<img src="images/'.$hasil['gambar'].'" width=150px height=150px>'.
									'<p>Rp '.$hasil['harga_tanaman'].'</p>'.
									'<a href="preview.php?id_tanaman='.$hasil['id_tanaman'].'"><button class="btn waves-effect waves orange darken-4">Readmore</button></a>'.
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
					$kueri=mysqli_query($connect,"select * from tanaman where jenis_tanaman='tanaman air' limit $limit,12");
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