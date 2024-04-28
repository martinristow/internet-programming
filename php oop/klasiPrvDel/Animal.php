<?php

class Animal{

public $type;
public $weight;

const ANIMAL_TYPES = ["dog","cat"];

public function setType($newType){

   // if(!in_array($newType, ['dog','cat']) ){
    //if(!in_array($newType,Animal::ANIMAL_TYPES)){//vaka e podobro bidejki vo bilo koe vreme moze da dodavame novi raboti
        if(!in_array($newType,self::ANIMAL_TYPES)){//bidejki vekje se naogjame vo klasata nema potreba da pisuvame Animal , samo self i zavrsena rabota
        throw new Error("Tipot moze da bide samo dog ili cat");
    }
    $this->type = $newType;


}

public function setWeight($newWeight){
    if($newWeight < 0.2){
        throw new Error("Weight mora da bide barem 0.2 ili pogolem");
    }
    $this->weight = $newWeight;

}

public function getFullDetails(){
    return $this->type. " ". $this->weight;
}
}


/*PRI PRAVENJE NA KLASI ->NIKOGAS NE TREBA DA IMAME KOD KAKO PODOLU 
SEKOGAS TREBA KLASATA DA NI BIDE SAMO KLASA , NISTO DRUGO VO NEA NE TREBA DA IMAME 
ZNACI OVOJ KOD KJE GO KOMENTIRAM I KE GO POVIKAM VO DRUG FAJL - >pecati.php
*/

/*
$dog = new Animal();

$dog->setType("dog");
//var_dump($dog->type);
$dog->setWeight(0.2);
echo $dog->getFullDetails();

foreach(Animal::ANIMAL_TYPES as $t){//da gi izlistame site raboti od const promenlivata
    echo $t." ";
}
*/

?>