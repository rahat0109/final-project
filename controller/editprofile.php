<html>
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <table
    <center>
        <h1></h1>
    </center>
    <tr>
      <td colspan="2">
          <nav style="margin: 10px 10px; display: block; float: left">
          
          <fieldset>
          <legend>EDIT PROFILE</legend>
            <form action="changeAction.php" method="post" enctype="multipart/form-data">
              <table align="center">
                <tr>
                    <td>User name</td>
                    <td>:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Current Password</td>
                    <td>:</td>
                    <td><input type="password" name="CrntPassword"></td>
                </tr>
                <tr>
                    <td>New Password</td>
                    <td>:</td>
                    <td><input type="password" name="newPassword"></td>
                </tr>
               
                <tr>
                    <td><input type="submit" name="btn" value="Submit"></td>
                </tr>
              </table>
            </form>
          </fieldset>
        </td>
      </tr>
      
    </table>
  </body>
</html>