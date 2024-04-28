<?php

require "User.php";

class Admin extends User{

public $adminVrednost;
public function __construct($novoIme,$newAdminVrednost){
    parent::__construct($novoIme);
    $this->isAdmin($newAdminVrednost);
}

public function isAdmin($newAdminVrednost){
    if($newAdminVrednost === 1){
        return $this->ime . " uspesno se najavivte kako admin!";
    }
    throw new Error("MALI NE SI ADMIN !");
}

public function getBroj(){
    return $this->adminVrednost;
}


}


?>