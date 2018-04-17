<?php
  require 'header.php';
?> 
  <div class="container" style="width:80%">
    <div class="section">

      <!--   Icon Section   -->
  <div class="row">
    <center><h3> Form Registrasi</h3></center>
      <div class = "row-center">
          <form class ="col s12" name="uploader" action="daftarproses.php" method="POST" enctype="multipart/form-data">
            <div class="card-panel teal lighten-5">
              
                <div class="row center">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="namauser" id="namauser" required>
                    <label for="namauser">Nama Lengkap</label>
                  </div>
                </div>

                <div class="row center">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input  type="email" name="emailuser" id="emailuser" required>
                    <label for="emailuser">Email</label>
                  </div>
                </div>

                <div class="row center">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">vpn_key</i>
                    <input type="password" name="passuser" id="passuser" min="6" required>
                    <label for="passuser">Password</label>
                  </div>
                </div>

                <div class="row center">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">today</i>
                    <input type="date" name="birthuser" class="datepicker" required>
                    <label  for="birthuser">Tanggal Lahir</label>
                  </div>
                </div>
                <div class="row center">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">contact_phone</i>
                    <input type="text" name="telpuser" id="telpuser" required>
                    <label for="telpuser">No Handphone</label>
                  </div>
                </div>
                <div class="row center">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">my_location</i>
                    <textarea id="alamatuser" name="alamatuser" class="materialize-textarea" required></textarea>
                    <label for="alamatuser">Alamat</label>
                  </div>
                </div>
                 <div class="row center">
                  <div class="input-field col s12">
                    <i class="material-icons prefix"></i>
						<div class="file-field input-field">
						  <div class="btn orange darken-4">
								<span>File</span>
								<input type="file" name="photouser">
						  </div>
							  <div class="file-path-wrapper">
								<input class="file-path validate" type="text" placeholder="Upload one or more files">
						  </div>
						</div>
					</div>
                 </div>

                <div class="row">
                  <div class="input-field col s5">
                   <p>
                        <input type="checkbox" id="test5" required/>
                        <label for="test5">Klik jika setuju</label>
                      </p>
            
                  </div>
                   <div class="input-field col s10">
                      <a class="waves-effect waves-light btn modal-trigger right-align orange darken-4" href="#modal1">Setuju dengan persyaratan</a>
                      <!-- Modal Structure -->
                      <div id="modal1" class="modal">
                        <div class="modal-content">
                          <h4>Persyaratan</h4>
                          <p>Jika ada pemalsuan data, akan terkena pasal undang-undang sekian</p>
                        </div>
                        <div class="modal-footer">
                          <a href="#!" class=" modal-action modal-close waves-effect waves btn-flat orange darken-4">Setuju</a>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="row center">
                   <button class="btn waves-effect waves orange darken-4" type="submit" >Submit
                      <i class="material-icons right">send</i>
                   </button>
                </div>

            </div>
          </form>
      </div>
      </div>

    </div>
  </div>
 <?php
	include 'footer.php';
?>