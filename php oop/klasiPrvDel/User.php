<?php



class User
{

public  $ime;
public $prezime;
public $procitaniknigi = [];

public function setIme($novoime){
    if(strlen($novoime)<3){
        throw new Error("Imeto ne moze da bide pomalku od 3 karakteri");//frli isklucok
    }

    $novoime = str_replace("-", " ",$novoime);//ako vnel crticka zameni so prazno mesto
$this -> ime = $novoime; 

}

public function getIme(){
    return $this->ime;
}

}

$martin = new User();//kreiranje na nov objekt
//$martin->ime = "Martin";
//$martin->prezime = "Ristov";
//$martin->procitaniknigi = ["Clean Code" , "Pragmatic programmer"];
//var_dump($martin->ime, $martin->prezime, $martin->procitaniknigi);

$marko = new User();

$marko -> setIme("Marko");
$marko ->prezime = "Markov";
//echo $marko ->ime;
//var_dump($marko);

echo $marko ->getIme();


?>