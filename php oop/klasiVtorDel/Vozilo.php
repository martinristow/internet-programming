<?php


class Vozilo{

    public $boja;
    public $tezina;
    public $visina;
    public $brojShasija;
    public $marka;
    public $model;

    public function __construct($boja,$tezina,$visina,$brojShasija,$marka,$model){

        $this->boja = $boja;
        $this->tezina = $tezina;
        $this->visina = $visina;
        $this->brojShasija = $brojShasija;
        $this->marka = $marka;
        $this->model = $model;

    }

    public function getPodatoci(){
        return $this->marka . " " . $this->model . " ". $this->boja . " " . $this->visina . " " .$this->tezina . " " . $this->brojShasija;
    }

} 

?>