<?php
//PRAVILNO RAKOVODENJE SO KLASI ->SEKOGAS TREBA VAKA DA SE DELE LOGIKATA -> CIST KOD 
require "Animal.php";

$dog = new Animal();

$dog->setType("dog");
//var_dump($dog->type);
$dog->setWeight(0.2);
echo $dog->getFullDetails();

foreach(Animal::ANIMAL_TYPES as $t){//da gi izlistame site raboti od const promenlivata
    echo $t." ";
}

?>