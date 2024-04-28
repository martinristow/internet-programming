<?php
//tuka u videoto ovoj insert_admin go brise , ja nema da go brisam za da znam so sam pisuval

require_once 'config.php';

$username =array('Martin','Nikola');
$password =array( 'martin123','nikola123');

echo $password."<br>";

$hashed_password = password_hash($password, PASSWORD_DEFAULT);//kreptiranje na passwordot

echo $hashed_password;

$sql = "INSERT INTO admins (username,password) VALUES(?,?)";

$run = $conn->prepare($sql);
$run->bind_param("ss",$username,$hashed_password);
$run->execute();
// so ovaj kod do tuka nasiot LOGIN SYSTEM E ZAVRSEN
    //TUKA SEGA PAUZA PRODOLZUVAME SO REALNITE ZADACI PO INTERNET PROGRAMIRANJE
