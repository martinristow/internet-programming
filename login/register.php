<?php
require_once "dbconfig.php";

if(isset($_POST['fname']) && isset($_POST['sname']) && isset($_POST['pass']) && isset($_POST['uname']) && isset($_POST['submit']))
{

$fname=$_POST['fname'];
$sname=$_POST['sname'];
$username=$_POST['uname'];
$pass=$_POST['pass'];

$pass_enc = password_hash($pass,PASSWORD_DEFAULT);

$sql = "INSERT INTO user (firstname,surname,username,password) VALUES('$fname','$sname','$username','$pass_enc')";
if (mysqli_query($con,$sql))
echo "Registration complete";
else {
  echo "Unsuccessful Registration.";

}
}
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register:</title>
  </head>
  <body>
    <h2>Registration</h2>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
    First Name: <input type="text" name="fname"><br>
    Surname: <input type="text" name="sname"><br>
    Username: <input type="username" name="uname" required><br>
    Password: <input type="password" name="pass" required><br><br>
    <input type="submit" name="submit" value="Register"><br>
  </form>
  <a href="./login.html">Back</a>
  </body>
</html>
