<?php
  require 'header.php';
  if($_SESSION['id']=="noOne"){
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
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
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

      <h5>Profile: <?php echo $result['nama_user']?> </h5>

        <div class="card blue-grey lighten-1">
          <div class="card-content white-text">
            <div class="col s12">
              <ul class="tabs">
                <li class="tab col s3 disabled"><a href="#test1">Umum</a></li>
                <li class="tab col s3 disabled"><a href="#test2">Kontak</a></li>
                <li class="tab col s3"><a class="active" href="#test3">Privasi</a></li>
                <li class="tab col s3 disabled"><a href="#test4">Foto</a></li>
              </ul>
            </div>
            <div id="test1" class="col s12">
              <div class="col s4">
                <img src="<?php echo $result['foto']?>" width="250" height="250" class="circle">
              </div>
              <div class="col s8">
                <table>
                  <thead>
                    <tr>
                        <th data-field="id">General Information</th>
                        <th data-field="name"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Nama Lengkap:</td>
                      <td><?php echo $result['nama_user']?></td>
                    </tr>
                    <tr>
                      <td>Birthdate:</td>
                      <td><?php echo $result['tanggal_lahir']?></td>
                    </tr>
                    <tr>
                      <td>Address:</td>
                      <td><?php echo $result['alamat']?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div id="test2" class="col s12">
              <div class="col s4">
                <img src="<?php echo $result['foto']?>" width="250" height="250" class="circle">
              </div>
              <div class="col s8">
                <table>
                  <thead>
                    <tr>
                        <th data-field="id">Contact Information</th>
                        <th data-field="name"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Email:</td>
                      <td><?php echo $result['email']?></td>
                    </tr>
                    <tr>
                      <td>Phone:</td>
                      <td><?php echo $result['alamat']?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div id="test3" class="col s12">
              <div class="col s4">
                <img src="<?php echo $result['foto']?>" width="250" height="250" class="circle responsive-img">
              </div>
              <div class="col s8">
                <table>
                  <thead>
				  <form action="changepassword.php">
                    <tr>
                        <th data-field="id">Informasi Privasi</th>
                        <th data-field="name"><button class="btn waves-effect waves-light" type="submit" name="action" disabled>Ubah</button></th>
                    </tr>
				  </form>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Password:</td>
                      <td><?php echo $result['password']?></td>
                    </tr>
                    <form action="changepasswordproses.php" method="post">
                    <tr>
                      <td>Password Lama:</td>
                      <td>
                          <input placeholder="password lama" id="password" type="password" name="oldpass" class="validate" required>
                      </td>
                    </tr>
                    <tr>
                      <td>Password Baru:</td>
                      <td>
                          <input placeholder="password baru" id="password" type="password" name="newpass" class="validate" required>
                      </td>
                    </tr>
                    <tr>
                      <td>Konfirmasi password baru:</td>
                      <td>
                          <input placeholder="konfirmasi password baru" id="password" type="passowrd" name="confnewpass" class="validate" required>
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
            <div id="test4" class="col s12">
              <div class="col s4">
                <img src="<?php echo $result['foto']?>" width="250" height="250" class="circle">
              </div>
              <div class="col s8">
                <table>
                  <thead>
                    <tr>
                        <th data-field="id">Photo Profile</th>
                        <th data-field="name"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>You can change your photo</td>
                    </tr>
                    <tr>
                      <td>
                        <form action="#changephoto">
                          <i class="material-icons prefix"></i>
                              <div class="file-field input-field">
                                <div class="btn">
                                  <span>File</span>
                                  <input type="file" name="foto">
                                </div>
                                <div class="file-path-wrapper">
                                  <input class="file-path validate" type="text" name="photouser" placeholder="Upload your photo">
                                </div>
                              </div>     
                          <button class="btn waves-effect waves-light" type="submit" name="action">Change</button>
                        </form>
                      </td>
                    </tr>
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
			/** $query2=mysqli_query($conn, "SELECT * FROM report WHERE id_user = '$id'");
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
		<?php }**/ ?>

    </div>
</div>

    <script src="user/material.min.js"></script>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/init.js"></script>
    <script src="js/jquery.chained.min.js"></script>
    <script>
         $(".button-collapse").sideNav();
        $('.fixed-action-btn').openFAB();
        $('.fixed-action-btn').closeFAB();
    </script>

    <?php } ?>
  </body>
  </html>