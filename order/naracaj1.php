<?php

//so sesijata gi prezimame informaciite od ovosje.html kade sto posle istite ke gi prosledime vo naracaj2.php
//bez sesija ne raboti 
session_start();
$_SESSION['bananas'] = $_POST['banani'];
$_SESSION['apples']=$_POST['jabolki'];
$_SESSION['pears']=$_POST['krusi'];
/////////////////////////////////////////////



//pecatenje na tekstot i stavame vrska vo detali za naracka kade sto so klikanje na toj tekst 
//stranicata ke ne prefrli na naraca2.php 
echo "Нарачката е успешно направена . За повеќе детали погледнете на следниот линк<br>";
echo "<a href='naraca2.php'>Детали за нарачката</a>";
//$vkupno_Za_plakjanje=$_SESSION['bananas']*60+$_SESSION['apples']*50+$_SESSION['pears']*40;

?>
