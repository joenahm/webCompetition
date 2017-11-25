<?php 
	session_start();

	if( $_SESSION['username'] ){
		$infoArr['status'] = true;
		$infoArr['username'] = $_SESSION['username'];
	}else{
		$infoArr['status'] = false;
	}

	echo json_encode($infoArr);
 ?>