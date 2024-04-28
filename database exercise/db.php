<?php
session_start();

$conn=mysqli_connect("localhost","root","","vezbi_baza");

if($conn){
   // echo "ok";

}
else{
    die("jok");

}

?>