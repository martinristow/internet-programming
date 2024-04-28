<?php

require "Vozilo.php";

class Avtomobil extends Vozilo{

    public $brojVrati;
    public $bandazi;
    public $auspuh;

    

    public function __construct($boja,$tezina,$visina,$brojShasija,$marka,$model,$vrati,$bandaz,$auspuhce){
        parent::__construct($boja,$tezina,$visina,$brojShasija,$marka,$model);
        $this->brojVrati = $vrati;
        $this->bandazi = $bandaz;
        $this->auspuh = $auspuhce;
        
    }

    public function getPPodatoci(){
        return parent::getPodatoci() . " " . $this->brojVrati . " " . $this->bandazi . " " . $this->auspuh;
    }

   
  
}



?>