<?php
    session_start();
	require_once "../model/doctorModel.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

	$status = login($username, $password);

	if($status){
		$_SESSION['status'] = true;
		setcookie('status', 'true', time()+3600, '/');
		header('location: ../view/front.php?username='.$username);
	}else{
		echo "Invalid User/Password";
	}
?> 