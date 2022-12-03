<?php
    session_start();
    require_once "../model/doctorModel.php";

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $religion = $_POST['religion'];
    $ssc = $_POST['ssc'];
    $hsc = $_POST['hsc'];
    $mbbs = $_POST['mbbs'];
    $PresentAddress = $_POST['PresentAddress'];
    $PermanentAddress = $_POST['PermanentAddress'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $status = Registration($firstname, $lastname, $gender, $dob, $religion, $ssc, $hsc, $mbbs, $PresentAddress, $PermanentAddress, $phone, $email, $username, $password);
    
    if($status){
        $_SESSION['status'] = true;
        setcookie('status', 'true', time()+3600, '/');
        header('location: ../view/doctorlogin.html');
    }else{
		echo "Invalid";
    } 
?>




    <!-- if($status){
        move_uploaded_file($tmpname, $uploc);
        $_SESSION['status'] = true;
        setcookie('status', 'true', time()+3600, '/');
        header('location: ../view/LoginPage.html');
    }else{
		echo require_once "../view/RegError.html";
    } -->