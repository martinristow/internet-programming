<?php

class OldMacDonaldFarmDataDriven{

private $animals;

public function __construct(){
    
    $this->animals= [
        "Dog" => "WOU-WOU",
        "CAR" => "MEOW",
        "COW" => "MUUUUU",
        "SHEEP" => "MEEEE",
        "ROOSTER" => "KUKURIKUU"
    ];
}

public function verse($animal,$sound) :void {
    echo "Old MacDonald had a farm, E I E I O,\n\n\n";
    echo "And on his farm, he had a " . $animal . ", E I E I O.\n\n\n";
    echo "With a " . $sound . " " . $sound . " here and a " . $sound . " " . $sound . " there,\n\n\n";
    echo "Here a " . $sound . ", there a " . $sound . ", everywhere a " . $sound . " " . $sound . ".\n\n\n";
    echo "Old MacDonald had a farm, E I E I O.\n\n\n\n";
}

public function sing() :void {
    foreach($this->animals as $animal=>$sound){
       $this->verse($animal,$sound);
    }
}

}

?>