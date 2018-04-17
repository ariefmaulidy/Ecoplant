<?php
require 'header.php';

	if ($_SESSION['status']=="nouser")
	{
		?>
			<script type="text/javascript">window.location.asssign("masuk.php")</script>
		<?php
	}	
    $id = $_SESSION['id'];
    $query = mysqli_query($connect, "SELECT * FROM user WHERE id_user = '$id'");
    $result = mysqli_fetch_array($query);
?>
<title>Profilnya <?php echo $result['nama_user']?> </title>
<div class="card-panel grey lighten-2">
		<div class="row">

		  <h4>Profil : <?php echo $result['nama_user']?>  </h4>
		  <BR>
			<div class="card blue-grey lighten-1" style="width:80%">
				<div class="col s12">
				  <ul class="tabs" class="hoverable">
					<li class="tab col s3"><a class="active" href="#test1">Umum</a></li>
					<li class="tab col s3"><a href="#test2">Kontak</a></li>
					<li class="tab col s3"><a href="#test3">Privasi</a></li>
					<li class="tab col s3"><a href="#test4">Foto</a></li>
				  </ul>
				</div>
				<div id="test1" class="col s12">
				  <div class="col s4">
					<br>
					<img src="<?php echo $result['foto']?>" class="circle responsive-img" width="250" height="250" alt="">
				  </div>
				  <div class="col s8">
				  <br>
					<table>
					  <thead>
						<tr>
							<th data-field="id">Informasi Umum</th>
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
					  </tbody>
					</table>
				  </div>
				</div>
				<div id="test2" class="col s12">
				  <div class="col s4">
				  <br>
					<img src="<?php echo $result['foto']?>" class="circle responsive-img" width="250" height="250">
				  </div>
				  <div class="col s8">
				  <br>
					<table>
					  <thead>
						<tr>
							<th data-field="id">Informasi Kontak</th>
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
					  </tbody>
					</table>
				  </div>
				</div>
				<div id="test3" class="col s12">
				  <div class="col s4">
					<br>
					<img src="<?php echo $result['foto']?>" class="circle responsive-img" width="250" height="250">
				  </div>
				  <div class="col s8">
					<br>
					<table>
					  <thead>
						<tr>
							<th data-field="id">Informasi Privasi</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <td>Password:</td>
						  <td> <input disabled value="<?php echo($result['password'])?>" id="disabled" type="password" class="validate"></td>
						</tr>
					  </tbody>
					</table>
				  </div>
				</div>
				<div id="test4" class="col s12">
				  <br>
				  <div class="col s4">
					<img src="<?php echo $result['foto']?>" class="circle responsive-img" width="250" height="250">
				  </div>
				  <div class="col s8">
					<br>
					<table>
					  <thead>
						<tr>
							<th data-field="id">Foto Profil</th>
							<th data-field="name"></th>
						</tr>
					  </thead>
					</table>
				  </div>
				</div>


			  </div>
			</div>
		</div>
<?php
	include 'footer.php';
?>