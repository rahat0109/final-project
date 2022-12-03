<?php 
session_start();
?>

<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Action</title>
</head>
<body>

	<?php
	
		if ($_SERVER['REQUEST_METHOD'] === "POST") {
			$username = $_POST['username'];
			$password = $_POST['password'];


			if (empty($username) or empty($password)) {
				echo "Please fill up the from properly";
			}
			else{
					if (file_exists("./dctr.json")) {
						
					

					$handle = fopen("./dctr.json","r");
					$data = fread($handle, filesize("./dctr.json"));
					$data = explode("\n", $data);
					$isValid = false;
					for ($i=0; $i < count($data) - 1 ; $i++) { 
						// code...
						$json = json_decode($data[$i]);
					
						if ($username === $json->username and $password === $json->password) {
							// code...
							$isValid = true;
							break;
						}
					}
					if ($isValid){
						if($rememberme === "on"){
							setcookie("username", $username, time() + 3600);
						}
						$_SESSION['username'] = $username;
						header("Location: ../view/front.php");
					}
					else {
						echo "Login Failed...";
					}
				}
				else {
					echo "Internal Server Error";
				}
			}

		}
	?>

	<hr>

	<a href="../view/doctorlogin.html">Login</a> | <a href="../view/doctorregistration.html">Registration</a>

</body>
</html>