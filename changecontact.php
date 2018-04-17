<?php
  require 'header.php';
  if($_SESSION['id']=="nouser"){
      ?>
      <script language="javascript">alert("Anda harus login terlebih dahulu");</script>
      <script>document.location.href='masuk.php';</script>
  <?php
  }
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Profile</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="user/images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="user/images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="user/images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="user/images/favicon.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="utama/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="utama/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>
  <body>

  <?php
    if(isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $query = mysqli_query($connect, "SELECT * FROM user WHERE id_user = '$id'");
    $result = mysqli_fetch_array($query);
  ?>

<div class="card-panel grey lighten-2">
    <div class="container">
      <div class="row">

      <h5> Profile: <?php echo $result['nama_user']?> </h5>

        <div class="card blue-grey lighten-1">
          <div class="card-content white-text">
            <div class="col s12">
              <ul class="tabs">
                <li class="tab col s3 disabled"><a href="#test1">Umum</a></li>
                <li class="tab col s3"><a class="active" href="#test2">Kontak</a></li>
                <li class="tab col s3 disabled"><a href="#test3">Privasi</a></li>
                <li class="tab col s3 disabled"><a href="#test4">Foto</a></li>
              </ul>
            </div>
			          
            <div id="test2" class="col s12">
              <div class="col s4">
                <img src="<?php echo $result['foto']?>" width="250" height="250" class="circle responsive-img">
              </div> 
              <div class="col s8">
                <table>
                  <thead>
                    <tr>
                        <th data-field="id">Informasi Kontak</th>
                        <th data-field="name"><button class="btn waves-effect waves-light" type="submit" name="action" disabled>Ubah</button></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Email:</td>
                      <td><?php echo $result['email']?></td>
                    </tr>
                    <tr>
                      <td>No Handphone:</td>
                      <td><?php echo $result['no_telp']?></td>
                    </tr>
					<form action="changecontactproses.php" method="post">
                    <tr>
                      <td>Email:</td>
                      <td>
                          <input placeholder="Email" id="password" type="text" name="email" class="validate" required>
                      </td>
                    </tr>
                    <tr>
                      <td>No Handphone:</td>
                      <td>
                          <input placeholder="No Handphone" id="password" type="text" name="no_telp" class="validate" required>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="profile.php"><button class="btn waves-effect waves-light" type="submit" name="action">Batal</button></a></td>
                      <td><button class="btn waves-effect waves-light" type="submit" name="action">Ubah</button></td>
                    </tr>
                  </form>
                  </tbody>
                </table>
              </div>
            </div>
			
           


            </div>
          </div>
        </div>

		<div class="card-panel blue-grey darken-4">
			<div class="card-content white-text">
				Recent Post
			</div>
		</div>
		<?php 
		/**	$query2=mysqli_query($connect, "SELECT * FROM report WHERE id_user = '$id'");
			while ($result2=mysqli_fetch_assoc($query2)) { ?>
		<br>
		<div class="container">
			<div class="row">
			<div class="section">
              <div class="card">
                <p>Posted on <?php echo $result2['timestamp']?></p>
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="<?php echo $result2['foto']?>">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">Daerah : <?php echo $result2['kec']?><i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal span.card-title">
                  <div class="activator">
                  <span class="card-title grey-text text-darken-4">Daerah : <?php echo $result2['kec']?><i class="material-icons right">close</i></span>
                  <p><?php echo $result2['deskripsi']?></p>
                  </div>
                </div>
              </div>
            </div>
			</div>
		</div>
		<?php } **/?>

      </div>
    </div>
</div>
	
    <script src="user/material.min.js"></script>
    <script src="utama/js/jquery-2.1.4.min.js"></script>
    <script src="utama/js/materialize.min.js"></script>
    <script src="utama/js/init.js"></script>
    <script src="utama/js/jquery.chained.min.js"></script>
    <script>
	      $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears:60 // Creates a dropdown of 15 years to control year
      });
         $(".button-collapse").sideNav();
        $('.fixed-action-btn').openFAB();
        $('.fixed-action-btn').closeFAB();
		
    </script>

    <?php } ?>
  </body>
  </html>