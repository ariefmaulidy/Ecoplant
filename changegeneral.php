<?php
  include 'header.php';
  if($_SESSION['id']=="nouser"){
      ?>
      <script language="javascript">alert("Anda harus login terlebih dahulu");</script>
      <script>document.location.href='masuk.php';</script>
  <?php
  }
?>
  
<?php
    $id = $_SESSION['id'];
    $query = mysqli_query($connect, "SELECT * FROM user WHERE id_user = '$id'");
    $result = mysqli_fetch_array($query);
?>

<div class="card-panel grey lighten-2">
    <div class="container">
      <div class="row">

      <h5><?php echo $result['nama_user']?> : Profile</h5>

        <div class="card blue-grey lighten-1">
          <div class="card-content white-text">
            <div class="col s12">
              <ul class="tabs">
                <li class="tab col s3"><a class="active" href="#test1">Umum</a></li>
                <li class="tab col s3 disabled"><a href="#test2">Kontak</a></li>
                <li class="tab col s3 disabled"><a href="#test3">Privasi</a></li>
                <li class="tab col s3 disabled"><a href="#test4">Foto</a></li>
              </ul>
            </div>
            <div id="test1" class="col s12">
              <div class="col s4">
                <img src="<?php echo $result['foto']?>" width="250" height="250" class="circle responsive-img">
              </div>
              <div class="col s8">
                <table>
                  <thead>
                    <tr>
                        <th data-field="id">Informasi Umum</th>
                        <th data-field="name"><button class="btn waves-effect waves-light" type="submit" name="action" disabled>Ubah</button></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Nama Lengkap:</td>
                      <td><?php echo $result['nama_user']?></td>
                    </tr>
                    <tr>
                      <td>Tanggal Lahir:</td>
                      <td><?php echo $result['tanggal_lahir']?></td>
                    </tr>
                    <tr>
                      <td>Alamat Lengkap:</td>
                      <td><?php echo $result['alamat']?></td>
                    </tr>
					<tr> 
					<form action="changegeneralproses.php" method="post">
                    <tr>
                      <td>Nama Lengkap:</td>
                      <td>
                          <input placeholder="Nama Lengkap" id="password" type="text" name="nama" class="validate" required>
                      </td>
                    </tr>
                    <tr>
                      <td>Tanggal Lahir:</td>
                      <td>
                          <input placeholder="Tanggal Lahir" type="date" name="birth" class="datepicker" required>
                      </td>
                    </tr>
                    <tr>
                      <td>Alamat Lengkap:</td>
                      <td>
                          <input placeholder="Alamat Lengkap" id="password" type="text" name="alamat" class="validate" required>
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
                      <td><?php echo $result['no_telp']?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div id="test3" class="col s12">
              <div class="col s4">
                <img src="<?php echo $result['foto']?>" width="250" height="250" class="circle">
              </div>
              <div class="col s8">
                <table>
                  <thead>
				  <form action="changepassword.php">
                    <tr>
                        <th data-field="id">Privacy Information</th>
                        <th data-field="name"><button class="btn waves-effect waves-light" type="submit" name="action" disabled>Change</button></th>
                    </tr>
				  </form>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Password:</td>
                      <td><?php echo $result['password']?></td>
                    </tr>
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
                                  <input type="file" name="photouser">
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
      </div>
    </div>
</div>
<?php
	include 'footer.php';
?>