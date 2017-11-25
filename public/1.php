<?php 
	session_start();
	$username = $_POST['username']; 
	$password = $_POST['password'];

	if( $username == 'joe' && $password == '123456' ){
		$_SESSION['username'] = $username;

		$infoArr['status'] = true;
		$infoArr['username'] = $_SESSION['username'];
	}else{
		unset($_SESSION['username']);
		session_destroy();

		$infoArr['status'] = false;
	}

	echo json_encode($infoArr);
 ?>