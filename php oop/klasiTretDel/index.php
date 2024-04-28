<?php

require_once 'CreditCard.php';
require_once 'Paypal.php';

$visaKarticka = new CreditCard();

$visaKarticka->setValuta("rsd");
echo $visaKarticka->getValuta();
echo "<br>";
$visaKarticka->setIznos(98);
echo $visaKarticka->getIznos();
echo "<br>";
//$visaKarticka->setBrojKarticka(24);
//echo $visaKarticka->getBrojKarticka();
echo "<br>";

$visa1 = new Paypal();
$visa1->setIme("Martin");
echo $visa1->getIme();
?>