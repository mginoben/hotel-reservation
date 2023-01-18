<?php
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(empty($username)){
		$name_error = "Please enter username!";
	}
	elseif (strlen($username) < 4) {
			$name_error = "Username must be atleast 4 characters";
	}


	if(empty($password)){
		$pass_error = "Please enter password!";
	}
	elseif (strlen($password) < 4) {
			$pass_error = "Password must be atleast 4 characters";
	}
	include('index.php');
?>

