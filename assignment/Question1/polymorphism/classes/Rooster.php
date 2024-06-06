<?php

require_once "../polymorphism/header.php";

class Rooster implements Animal{
    public function getName():string{
        return "Rooster";
    }

    public function getSound():string{
        return "Kukurikuu";
    }
}
