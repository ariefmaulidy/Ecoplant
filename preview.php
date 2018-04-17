<?php
	include 'header.php';
	if(isset($_GET['id_tanaman'])){
		$qry = mysqli_query($connect, "SELECT * FROM tanaman WHERE id_tanaman = '".$_GET['id_tanaman']."'");
		$konten = mysqli_fetch_array($qry);
	}
	else{
		header("location: shop.php");
	}
?>
<title>Pembelian <?php echo $konten['nama_tanaman']?></title>
 <script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
   </script>		
<link rel="stylesheet" href="web/css/etalage.css">
<script src="web/js/jquery.etalage.min.js"></script>
<script>
	
	jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
   <div class="main">
   	 <div class="wrap">
   	 	<div class="preview-page">
   	 	       <div class="section group">
				<div class="cont-desc span_1_of_2">
				  <div class="product-details">	
					<div class="grid images_3_of_2">
							<ul id="etalage">
							<li>
								<img class="etalage_source_image" src="images/<?php echo $konten['gambar']; ?>" title="" />
							</li>
						</ul>
				     </div>
				   <div class="desc span_3_of_2">
					<h2><?php echo $konten['nama_tanaman'];?></h2>
					<p>Cara merawat tanaman ini adalah <?php echo $konten['cara_perawatan']?>.</p>					
					<div class="price">
						<p>Price: <span>Rp <?php echo $konten['harga_tanaman']?>,-</span></p>
					</div>
					<?php if($konten['stok']!=0){?>
					<div class="available">
						<ul>
							<li><span>Stok yang tersedia:</span>&nbsp; <?php echo $konten['stok']; ?> </li>
					    </ul>
					</div>
				<form action="prosespembelian.php?id_tanaman=<?php echo $_GET['id_tanaman'] ?>" method="post" enctype="multipart/form-data">
					<div class="share">
						<p>Jumlah yang ingin dibeli :</p><input name="banyak" type="number" class="text_box" type="text" value="1" min="1" max="<?php echo $konten['stok']?>">
						<?php if($_SESSION['id']!="nouser"){?>
						<button class="btn waves-effect waves orange darken-4" type="submit" name="action">Beli</button>
						<?php } else{ ?>
						<a class="btn orange darken-4 tooltipped" data-position="down" data-delay="50" data-tooltip="You must login first" disabled>Beli</a> <?php } ?>
					</div>
				</form>
					<?php } else {?>
					<p>Maaf stok tanaman sudah habis</p>
					<a href="shop.php"><button class="btn waves-effect waves teal">Back</button></a>					
					<div class="clear"></div>
					<?php }?>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
	</div>
<?php
	include 'footer.php';
?>