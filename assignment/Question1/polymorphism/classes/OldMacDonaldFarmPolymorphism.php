<?php
require_once 'Cow.php';
require_once 'Dog.php';
require_once 'Cat.php';
require_once 'Rooster.php';
require_once 'Sheep.php';

class OldMacDonaldFarmPolymorphism {
    private $animals;

    public function __construct() {
        $this->animals = [
            new Cow(),
            new Dog(),
            new Cat(),
            new Rooster(),
            new Sheep()
        ];
    }

    public function verse(Animal $animal): void {
        echo "Old MacDonald had a farm, E I E I O,\n";
        echo "And on his farm, he had a " . $animal->getName() . ", E I E I O.\n";
        echo "With a " . $animal->getSound() . " " . $animal->getSound() . " here and a " . $animal->getSound() . " " . $animal->getSound() . " there,\n";
        echo "Here a " . $animal->getSound() . ", there a " . $animal->getSound() . ", everywhere a " . $animal->getSound() . " " . $animal->getSound() . ".\n";
        echo "Old MacDonald had a farm, E I E I O.\n\n";
    }

    public function sing(): void {
        foreach ($this->animals as $animal) {
            $this->verse($animal);
        }
    }
}