<?php

require_once "../polymorphism/header.php";

class Sheep implements Animal{
    public function getName():string{
        return "Sheep";
    }

    public function getSound():string{
        return "Meeee";
    }
}
