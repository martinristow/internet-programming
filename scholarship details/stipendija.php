<?php

 $selekcija=$_POST['selekcija'];
 $ime=$_POST['ime'];
 $prezime=$_POST['prezime'];
 $br_index=$_POST['br_index'];
?>


<?php

date_default_timezone_set('Europe/Skopje');
	echo date("l jS \of F Y h:i:s A"). "<br><br>";
?>

<html>

<?php
$sum = 0;
$prosek=0;



for ($i = 1; $i <= 10; $i++) {
	// Прооди преку сите внесени броеви и додади ги кумулативно на сумата
	if (isset($_POST["ocena$i"])) {
		$broj = floatval($_POST["ocena$i"]);
		
		
		$sum += $broj;
		$prosek = $sum / 10;
	
	}
}
if($selekcija == "TipA"&& $prosek>9 )
{
echo "Корисникот <b>$ime $prezime</b> со број на индекс <b>$br_index</b> направи Успешна апликација на стипендија за ". $selekcija . " .";
}
else if($selekcija == "TipB"&& $prosek>8)
{
	echo "Корисникот <b>$ime $prezime</b> со број на индекс <b>$br_index</b> направи Успешна апликација на стипендија за ". $selekcija . " .";
}
else if($selekcija == "TipC"&& $prosek>7)
{
	echo "Корисникот <b>$ime $prezime</b> со број на индекс <b>$br_index</b> направи Успешна апликација на стипендија за ". $selekcija . " .";
}
else {
	echo "Неуспешна апликација за ". $selekcija;
}
?>
</html>