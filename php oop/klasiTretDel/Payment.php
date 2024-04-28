<?php



class Payment{

    const DOZVOLENI_VALUTI = ['den','eur','dol','rsd'];
    private $valuta = "eur";
    public $iznos = 100;//defaultni vrednosti -> dodeluvanje na samiot pocetok 

    public function setIznos($newIznos){
        if($newIznos < 0 || $newIznos > 100){
            die("Mora da bide pogolemo od 0 i pomalo od 100");
        }
        $this->iznos = $newIznos;
    }

    public function getIznos(){
        return $this->iznos;
    }

    public function setValuta($newValuta){
        if(!in_array($newValuta,self::DOZVOLENI_VALUTI)){
            die("Valutata koja sto ja vnesovte ne e validna");
        }
        $this->valuta = $newValuta;
    }

    public function getValuta(){
        return $this->valuta;
    }

}

?>