<?php

require_once "../polymorphism/header.php";

class Dog implements Animal{
    public function getName():string{
        return "Dog";
    }

    public function getSound():string{
        return "WAU-WAU";
    }
}
