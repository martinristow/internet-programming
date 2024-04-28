<?php

require_once "Payment.php";
require_once "RequiredPayment.php";
class Paypal extends Payment implements RequiredPayment{

public function pay(){
    
}

public $imePrezime;

public function setIme($newIme){
    $this->imePrezime = $newIme;
}

public function getIme(){
    return $this->imePrezime;
}
    
}

?>