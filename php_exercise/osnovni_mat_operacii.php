<?php
$prv_broj = 100;
$drug_broj = 10;

$zbir = $prv_broj + $drug_broj;
echo "Zbirot na broevite e ".$zbir."<br>";

$odzemanje = $prv_broj - $drug_broj;
echo "Odzemanje na broevite e ".$odzemanje."<br>";

$mnozenje = $prv_broj * $drug_broj;
echo "Mnozenje na broevite e ".$mnozenje."<br>";

$delenje = $prv_broj / $drug_broj;
echo "Delenje na broevite e ".$delenje."<br>";

$tret_broj=11;
$cetvrt_broj=3;
$ostatokot= $tret_broj % $cetvrt_broj;
echo "Ostatokot na broevite e ".$ostatokot."<br>";

if($prv_broj>$drug_broj){
	echo "$prv_broj e pogolem od $drug_broj";
	
}
else if($prv_broj<$drug_broj) echo "Brojot e pomal";
else echo "Brojot e ednakov";
?>