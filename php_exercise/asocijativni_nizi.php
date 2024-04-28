<?php 

$proizvodi= array("Grav"=>10, "Kafe"=>50,"Brasno"=>90);//leva i desna vrednost
//levata strana e klucot(key) a desnata strana e vrednosta(value)

echo "Grav imame vkupno ". $proizvodi["Grav"]. " , kafe ".$proizvodi["Kafe"]. " , brasno ".$proizvodi["Brasno"];

echo "<br>";
foreach($proizvodi as $kluc =>$vrednost){
	echo "Kluc e $kluc i vrednosta e $vrednost <br>";
	
}

echo "<br>";
foreach($proizvodi as $kluc){
	echo "Kluc e $kluc <br>";
	
}
echo "<br>";
foreach($proizvodi as$vrednost){
	echo " vrednosta e $vrednost <br>";
	
}
?>