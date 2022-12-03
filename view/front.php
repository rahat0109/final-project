<?php
  session_start();

  $username = $_REQUEST['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .top
        {
            text-align: center;
        }
        .center
        {
            text-align: center;
        }
    </style>    
</head>
<body>
<fieldset>
    <h1 class="top"> XYZ Hospital </h1>
    <hr>
    <br>
    <h2 class="top"><?php echo $username?></h2>
    <br>
    <div class="center">
    <form action=""><input style="width:250px; height:150 px;" type="submit" value="Submit attendance"></form>
    <br>
    </div>
    
    <div class="center">
    <form action=""><input style="width:250px; height:150 px;" type="submit" value=" Update time schedule"></form>
    <br>
    </div>
    <div class="center">
    <form action=""><input style="width:250px; height:150 px;" type="submit" value="Patient details"></form>
    <br>
    </div>
    <div class="center">
    <form action=""><input style="width:250px; height:150 px;" type="submit" value="Payment info"></form>
    <br>
    </div>
    <div class="center">
    <form action=""><input style="width:250px; height:150 px;" type="submit" value="Available stuff's"></form>
    <br>
    </div>
    <div class="center">
    <form action=""><input style="width:250px; height:150 px;" type="submit" value="Apply for leave"></form>
    <br>
    </div>

	<div class="center">
    <form action="../controller/editprofile.php"><input style="width:250px; height:150 px;" type="submit" value="Edit profile"></form>
    <br>
    </div>
   
    <form action="./doctorlogin.html"><input type="submit" value="Logout"> </form>
    <br>
    </div>
</fieldset>
</body>
</html>