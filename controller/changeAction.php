<?php
    session_start();
	require_once "../model/doctorModel.php";

    $username = $_POST['username'];
    $CrntPassword = $_POST['CrntPassword'];
    $NewPassword = $_POST['NewPassword'];

    $status = update($username,$CrntPassword,$NewPassword);

    if($status){
        $_SESSION['status'] = true;
        setcookie('status', 'true', time()+3600, '/');
        header('location: ../view/front.php?username='.$username);
    }else{
        echo "Error";
    }
?>