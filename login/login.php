<?php
require_once "dbconfig.php";
if(isset($_POST['submit']))
{
if(isset($_POST['username']) && isset($_POST['password']))
{
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $query = "SELECT * FROM user WHERE username='$user'";
  $result = mysqli_query($con,$query);
  if(!$result) die ('You are not registered!');
  else {
  $row = mysqli_fetch_row($result);

  $verify = password_verify($pass,$row[3]);

  if($verify)
  {
    echo "Hi $row[1], you are now logged in as $row[1] $row[2]";
    session_start();
    $_SESSION['username'] = $row[3];
    $_SESSION['surname'] = $row[2];
    $_SESSION['firstname'] = $row[1];

    echo "<p><a href=continue.php>Click here to continue</a></p>";

    echo "<p><a href=logout.php>Logout</a></p>";

  }
  else
  die("Invalid username/password combination");
}
}
}
?>
