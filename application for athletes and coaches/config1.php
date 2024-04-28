<?php

session_start();

$servername="localhost";
$db_username="root";
$db_password="";
$database_name="vezbi_baza";

$conn=mysql_connect($servername,$db_username,$db_password,$database_name);

if(!$conn)
{
    die("neuspesna konekcija");
}
else
{
    echo "uspesno";
}
?>