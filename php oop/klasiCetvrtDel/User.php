<?php

class User{

public $ime;
public $prezime;
public $korisnickoIme;
public $email;
public $telefonskiBroj;
public $password;
public $potvrdiPassword;
//,$novoPrezime,$novoKorisnickoIme,$novEmail,$novTelefonskiBroj,$novPassword,$novPotvrdiPassword
protected function __construct($novoIme){
    $this ->setIme($novoIme);
}

private function setIme($novoIme){
    $proverenoNovoIme = strlen($novoIme);
    if(!($proverenoNovoIme > 30 || $proverenoNovoIme < 3)){
        $this->ime = $novoIme;
    }
    else {
        throw new Error("GRESKA SI BE BATENCE");
    }
  
}

protected function getIme(){
    return $this->ime;
}

}


?>