<?php
//Standardizacija - > kako se vika fajlot , taka gu definiramo i klasata
class Vozilo 
{

    public $brojNaGuma;
    public $pogon;
    public $tezina;
    public $visina;

    public function setPodatoci($newBrojNaGuma,$newPogon,$newTezina,$newVisina){

        $this->brojNaGuma = $newBrojNaGuma;
        $this->pogon = $newPogon;
        $this->tezina = $newTezina;
        $this->visina = $newVisina;

    }

    public function getPodatoci(){
        return $this->brojNaGuma . " " . $this->pogon . " " . $this->tezina . " " . $this->visina; 
    }

}

$vozilo1 = new Vozilo();
$vozilo1->setPodatoci('15/255/14','preden pogon','3600kg','1,57m');
echo $vozilo1->getPodatoci();
?>