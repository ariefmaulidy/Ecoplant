<?php
	include 'header.php';
	if($_SESSION['status']=="user"){ ?>
			<script language="javascript">alert("Anda tidak memiliki hak ases!");</script>
			<script>document.location.href='index.php';</script>
	<?php } ?>
	<title>Admin login</title>
	<div class="container" style="width:80%">
  
    <div class="section">

      <div class="row">
        <center><h3> Admin Login</h3></center>
            <div class="card-panel teal lighten-5 hoverable">
              <form action="loginprosesadmin.php" method="post">
                <div class="row center">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="email" id="email" />
                    <label for="email">Email</label>
                  </div>
                </div>                
                <div class="row center">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">vpn_key</i>
                      <input type="password" name="password" id="password"/>
                      <label for="password">Password</label>
                  </div>
                </div>
                <div class="row center">
                   <button class="btn waves-effect waves orange darken-4" type="submit" value="submit">Login
                      <i class="material-icons right">send</i>
                   </button>
                </div>
              </form>
            </div>
        </div>

    </div>
  </div>
<?php
	include 'footer.php';
?>