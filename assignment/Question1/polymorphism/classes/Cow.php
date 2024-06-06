<?php

require_once "../polymorphism/header.php";

class Cow implements Animal{
    public function getName():string{
        return "Cow";
    }

    public function getSound():string{
        return "muuu";
    }
}
