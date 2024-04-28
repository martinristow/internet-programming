<?php
session_start();

unset($_SESSION['username']);
unset($_SESSION['surname']);
unset($_SESSION['firstname']);

session_destroy();
header("Location:./login.html");

 ?>
