<?php 
require_once "app/config/config.php";
require_once "app/classes/User.php";

$user = new User();//kreirame objekt 
$user->logout();//vcituvame go logout 

header('Location: login.php');
exit();
?> 