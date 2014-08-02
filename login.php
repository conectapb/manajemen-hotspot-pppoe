<?php

if(isset($_POST['submit']))
{
$username = $_POST['username'];
$pass=md5($_POST['password']);
$login=sprintf("SELECT * FROM admin WHERE username='$username' AND password='$pass'", mysql_real_escape_string($username), mysql_real_escape_string($pass));
$cek_lagi=mysql_query($login);
$ketemu=mysql_num_rows($cek_lagi);
$r=mysql_fetch_array($cek_lagi);

// Apabila username dan password ditemukan
if ($ketemu > 0){
	session_start();
  	session_register("logged");
	session_register("namauser");
	session_register("nama");

	$_SESSION['logged'] 	= true;
	$_SESSION['namauser']   = $r['username'];
	$_SESSION['nama']  		= $r['nama'];

	header ('location:index.php'); 
	close();
	} else{
		$error="error";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Paweł 'kilab' Balicki - kilab.pl" />
<title>CyberCity Networks | Admin</title>
<link rel="stylesheet" type="text/css" href="assets/css/login.css" media="screen" />
</head>
<body>
<div class="wrap">
	<div id="content">
		<div id="main">
			<div class="full_w">
				<form action="" method="post">
					<label for="login">Username:</label>
					<input id="username" name="username" class="text" />
					<label for="pass">Password:</label>
					<input id="pass" name="password" type="password" class="text" />
					<div class="sep"></div>
					<button type="submit" name="submit" class="ok">Login</button> <a class="button" href="">Lupa password?</a>
				</form>
			</div>
			<div class="footer">Copyright &copy 2014 | <a href="">CyberCity Networks</a></div>
		</div>
	</div>
</div>
				<?php 
				if($error == 'error')
					echo '<div class="alert alert-danger fade in widget-inner">
								<button type="button" class="close" data-dismiss="alert">×</button>
								<i class="fa fa-times"></i> Error: Username atau Password pengguna salah!!!
							</div>';
				?>
</body>
</html>