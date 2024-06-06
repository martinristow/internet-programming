<?php

require_once "../polymorphism/header.php";

class Cat implements Animal{
    public function getName():string{
        return "Cat";
    }

    public function getSound():string{
        return "meowwww";
    }
}
