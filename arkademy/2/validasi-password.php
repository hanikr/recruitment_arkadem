<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
</head>
<body>
<?php
	// Membuat variabel
	$username="";
	$pass = "";
	$usernameErr = "";
	$passErr = "";
	$username_valid = true;
	$username_valid_msg = "";
	$valid_panjang_pass = true;
	$valid_panjang_pass_msg = "";

	
	// Cek form sudah di klik submit/belum
	if(isset($_POST['submit'])){
		$username = trim($_POST['username']);
		$pass = trim($_POST['pass']);
	
		// Cek input kosong
		if(empty($username)){
			$usernameErr = "Username masih kosong.<br>";
		}
		if(empty($pass)){
			$passErr = "Password masih kosong.<br>";
		}
		
		// Kode cek username hanya boleh huruf a-z dan A-Z
		if(!preg_match("/^[a-z_]*$/",$username)){
			$username_valid = false;
			$username_valid_msg = "Hanya huruf yang diijinkan, dan tidak boleh menggunakan spasi.<br>";
		}
		
		if(strlen($username) >= 8){
			$username_valid = false;
			$username_valid_msg = "Username panjang maximal 8 digit.<br>";
		}

		// Cek minimal karakter password (minimal 8 digit)
		if(strlen($pass) >= 8){
			$valid_panjang_pass = false;
			$valid_panjang_pass_msg = "Password maximal 8 digit.<br>";
		}
		
		
		
		// Cek semua input sudah diisi apa belum
		if( !!empty($username) and !empty($pass) and $username_valid and $valid_panjang_pass ){
			// Disini tempat menulis kode (semua syarat sudah input terpenuhi).
			// Misalnya menulis kode query ke database
			echo "Selamat semua input sudah diisi dengan benar.<br>";
		}
		
	}
?>
 
<h3><center> From Register </center></h3>
 
<form action="validasi-password.php" method="post">
	<div class="kotak_login">
	<label> Username </label> 
	<input type="text" name="username" value="<?php echo $username; ?>"><br/>
		<?php echo $usernameErr.$username_valid_msg; ?>
	<label> Password </label> 
	<input type="password" name="pass" value="<?php echo $pass; ?>"><br/>
		<?php echo $passErr.$valid_panjang_pass_msg; ?>
	<br/>
	<br/>
	<input type="submit" class="tombol-login" name="submit" value="Register">
	<input type="reset" name="reset" value="Reset">
</div>
</form>
</body>
</html>
