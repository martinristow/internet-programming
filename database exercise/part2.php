<?php

session_start();

if($_SESSION['tekst1']){
    $tekst1=$_SESSION['tekst1'];
    echo $tekst1."<br>";
}
else{
    echo "nema <br>";
}



$tekst3=$_SESSION['tekst2'];

echo $tekst3;

?>