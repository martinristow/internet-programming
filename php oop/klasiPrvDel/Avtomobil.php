<?php

//Klasa e definija kako bi nesto trebalo da izgleda i sto bi trebalo da ima 
class Avtomobil {

    public $tezina;
    public $sirina;
    public $boja;
    public $marka;
    public $model; 

    public function __construct($markaAvtomobil,$modelAvtomobil){

        $this->marka = $markaAvtomobil;
        $this->model = $modelAvtomobil;
        return $this->marka . " " . $this->model;

    }

    public function setPodatoci($newtezina,$newsirina,$newboja){

        $this->tezina = $newtezina;
        $this->sirina = $newsirina;
        $this->boja = $newboja;


    }

    public function getPodatoci(){
        return $this->marka . " " . $this->model . " " . $this->boja . " " . $this->tezina . " " . $this->sirina;
        
    }

    public function zapaliMotor(){

    }
}



?>