<?php 
  require 'connect.php';
  if($_SESSION['status']!="admin"){ ?>
			<script language="javascript">alert("Anda tidak memiliki hak ases!");</script>
			<script>document.location.href='index.php';</script>
<?php } ?>
<title>Tambah Tanaman </title>
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
    <div class="section">
  <div class="row">
    <center><h3> Tambah Tanaman </h3></center>
	  <div class = "row-center">
          <form class ="col s12" name="uploader" action="tambahproses.php" method="POST" enctype="multipart/form-data">
            <div class="card-panel teal lighten-5">
              
                <div class="row center">
                  <div class="input-field col s12">
                    <i class="material-icons prefix"></i>
                    <input type="text" name="nama_tanaman" id="nama_tanaman" required>
                    <label for="nama_tanaman">Nama Tanaman</label>
                  </div>
                </div>

                	<div class=".input-field row" style="width:85%">
					<label clasa="left">Jenis</label>
					<select name="jenis" required>
						<option value="" disabled selected>Pilih jenis tanaman</option>
						<option value="Tanaman Hias Bunga">Tanaman Hias Bunga</option>
						<option value="Tanaman Hias Daun">Tanaman Hias Daun</option>
						<option value="Tanaman Air">Tanaman Air</option>
						</select>
				</div>

                <div class="row center">
                  <div class="input-field col s12">
                    <i class="material-icons prefix"></i>
                    <input type="text" name="harga_tanaman" id="harga_tanaman" required>
                    <label for="harga_tanaman">Harga Tanaman</label>
                  </div>
                </div>

                <div class="row center">
                  <div class="input-field col s12">
                    <i class="material-icons prefix"></i>
                    <input type="text" name="cara_perawatan" id="cara_perawatan" required >
                    <label  for="cara_perawatan">Cara Perawatan</label>
                  </div>
                </div>
				
				<div class="row center">
                  <div class="input-field col s12">
                    <i class="material-icons prefix"></i>
                    <input type="text" name="stok" id="stok" required>
                    <label  for="stok">Stok tanaman</label>
                  </div>
                </div>
                
                 <div class="row center">
                  <div class="input-field col s12">
                    <i class="material-icons prefix"></i>
						<div class="file-field input-field">
						  <div class="btn">
								<span>File</span>
								<input type="file" name="gambar">
						  </div>
							  <div class="file-path-wrapper">
								<input class="file-path validate" type="text" placeholder="Upload one or more files" required>
						  </div>
						</div>
					</div>
                 </div>

                

                <div class="row center">
                   <button class="btn waves-effect waves-teal" type="submit" >Submit
                      <i class="material-icons right">send</i>
                   </button>
                </div>

            </div>
          </form>
      </div>

    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  
 <?php
	require 'footer.php';
?>