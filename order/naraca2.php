<?php

//racunanje na kodo
$den_na_ragjanje=7;
$mesec_na_ragjanje=3;
$godina_na_ragjanje=2002;
$kod=$den_na_ragjanje+$mesec_na_ragjanje+$godina_na_ragjanje;//formula dadena vo zadacata
/////////////////////////

//sesija prezemame gi podatocite od naracaj1.php
session_start();
$bananas = $_SESSION['bananas'];
$apples = $_SESSION['apples'];
$pears = $_SESSION['pears'];
////////


//racuname ja sumata na sekoj proizvod odelno
$vkupno_banani=$bananas*60;
$vkupno_apples=$apples*50;
$vkupno_pears=$pears*40;
///////////////////


//racuname ja celata suma na site proizvodi
$vkupno_za_plakanjeee=$vkupno_banani+$vkupno_apples+$vkupno_pears;
//////////////////////////////////////////////

//pecateme gi podatocite
echo "<b>Детали:</b><br>";
echo "$bananas x 60 = $vkupno_banani<br>";
echo "$apples x 50 = $vkupno_apples<br>";
echo "$pears x 40 = $vkupno_pears<br><hr>";
echo "ВКУПНО: ".$vkupno_za_plakanjeee;
echo "<br>";
echo "Вашиот код е: ".$kod;
////////////////////////////////////////

?>