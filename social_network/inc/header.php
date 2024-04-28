<?php
include "functions/init.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Martin Social Network</title>
</head>
<body>
    
<div class="container">

<ul>
    <li><a href="index.php">Home</a></li>

<?php if(!isset($_SESSION['email'])) :  ?>

    <li><a href="login.php">Login</a></li>
    <li><a href="register.php">Register</a></li>

    <?php else :  ?>
    <li><a href="profile.php">Profile</a></li>
    <li><a href="logout.php">Logout</a></li>
    <li class="welcome-message"><h3><?php $user = get_user(); echo $user['first_name'];?> , welcome!</h3></li>

    <?php endif ;  ?>
</ul>

<hr>