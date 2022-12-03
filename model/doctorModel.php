<?php 
    require_once "db.php";

    function  Registration($firstname, $lastname, $gender, $dob, $religion, $ssc, $hsc, $mbbs, $PresentAddress, $PermanentAddress, $phone, $email, $username, $password){
        $conn = getConnection();
        $sql = 
        "INSERT INTO `doctor`(`firstname`, `lastname`, `gender`, `dob`, `religion`, `ssc`, `hsc`, `mbbs`, `PresentAddress`, `PermanentAddress`, `phone`, `email`, `username`, `password`) VALUES ('{$firstname}','{$lastname}','{$gender}','{$dob}','{$religion}','{$ssc}','{$hsc}','{$mbbs}','{$PresentAddress}','{$PermanentAddress}','{$phone}','{$email}','{$username}','{$password}')";
        $result = mysqli_query($conn, $sql);

        if($result){
            return true;
        }else{
            return false;
        }
    }

    function login($username, $password){
        $conn = getConnection();
		$sql = "select * from doctor where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            return true;
        }else{
            return false;
        }
    }

    function update($username, $CrntPassword, $NewPassword)
    {
        $conn = getConnection();
		$sql = "
        update `doctor` set `password`='{$NewPassword}' WHERE `username`='{$username}' and `password`='{$CrntPassword}';
        ";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
?>