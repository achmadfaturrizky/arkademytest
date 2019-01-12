<?php
	// Membuat variabel
	$username="bigboss_";
	$password = "qazW_123";
	$usernameErr = "";
	$passErr = "";
	$username_valid = "";
	$username_valid_msg = "";
	$password_valid = "";
	$password_valid_msg = "";
		
		// Kode cek username hanya boleh huruf a-z dan A-Z
		if(!preg_match("/^[a-z_]{8,}$/",$username))
		{
			$username_valid = false;
			$username_valid_msg = "Username, $username tidak valid, harus terdiri dari huruf kecil dan underscore. Dengan pangjang 8
karakter.<br>";
		}else
		{	
			$username_valid = true;
			$username_valid_msg = "Username, $username Valid<br>";
		}
		
		
		// Cek minimal karakter password (minimal 8 digit)
		if(!preg_match( '/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]){8,}/', $password))
		{
			$password_valid = false;
			$password_valid_msg = "Password $password tidak valid, Password minimal 8 digit atau setidaknya terdapat sebuah huruf kecil, sebuah huruf besar, sebuah angka, dan sebuah karakter spesial.<br>";
		}
		else
		{
			$password_valid = true;
			$password_valid_msg = "Password, $password Valid<br>";	
		}
?>
<?php echo $usernameErr.$username_valid_msg; ?>
<?php echo $passErr.$password_valid_msg; ?>
