<?php
$vneseno_od_html_pole = $_POST["ime"];
$vneseno_oh_html_pole1 = "Martinn";//ovoa deka moze da bide i mesto gornata linija 
//deka se proveruva promenlivata ama u vaj slucaj taa tuka ne e povikana zatoa nema da 
//rabote , tuka ni e prvata promenliva povikana so post metodot.
echo "<h1>".$vneseno_od_html_pole . "</h1>";

if($vneseno_od_html_pole == "Martin"){
	echo "Bravo kralu";
} 
else
{
	echo "Procitaj go toj strip";
}
?>