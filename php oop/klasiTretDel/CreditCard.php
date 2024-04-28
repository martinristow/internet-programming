<?php 

require_once 'Payment.php';
require_once "RequiredPayment.php";
class CreditCard extends Payment implements RequiredPayment{
   
    public function pay(){
    
    }

  /*  
public $brojKarticka;

public function setBrojKarticka($newKarticka){

    $this->brojKarticka = $newKarticka;

}

public function getBrojKarticka(){
    return $this->brojKarticka;
}*/
   
}

?>