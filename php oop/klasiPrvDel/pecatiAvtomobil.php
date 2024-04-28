<?php

require  "Avtomobil.php";
//Objekti - > sekogas se pisuvaat nadvor od klasite 
//Objekti -> napravivme nov avtomobil i go stavivme vo varijablata newAvtomobil
$newAvtomobil = new Avtomobil('bmw', "M5");
$newAvtomobil->setPodatoci(2600,2.5,"crna");
echo $newAvtomobil->getPodatoci();

echo "<br>";

$golf1 = new Avtomobil('vw','GOLF 1');
//$golf1 ->__construct();
$golf1 -> setPodatoci('950kg','2,3','Crvena',);
echo $golf1 ->getPodatoci();

?>