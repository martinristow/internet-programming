<?php

$nasoka=$_POST['opa'];
$oblast=$_POST['skr'];



echo "<br>";
if($oblast =="Internet Programiranje" && $nasoka)
{

    echo "Uspesno kreiravte aplikacija za prakticna rabota vo nasokata <b>$nasoka</b> , oblast <b>$oblast</b>";
    
}
else if($oblast =="Bazi na podatoci")
{
    echo "Uspesno kreiravte aplikacija za prakticna rabota vo nasokata <b>$nasoka</b> , oblast <b>$oblast</b>";
}
else 
{
    echo "Uspesno kreiravte aplikacija za prakticna rabota vo nasokata <b>$nasoka</b> , oblast <b>$oblast</b>";
}


