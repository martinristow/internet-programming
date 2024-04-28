<?php

$programiski_jazici = array("JavaScript","PHP","C","Perl");

echo "Prv jazik e : $programiski_jazici[0] <br> Vtor jazik : $programiski_jazici[1] <br>";


$test = count($programiski_jazici);//count e funkcija od samata programa
echo $test."<br>";

for($i=0; $i<$test;$i++){
	
	echo $programiski_jazici[$i] . "<br>";
}
?>