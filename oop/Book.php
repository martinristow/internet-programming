<?php
//vo klasite glavno ne se pisuva html kod i istoto ne e preporaclivo
class Book {
    private $title;
    private $author;

    public function __construct($title,$author){//kreirame konstruktor
        $this->title=$title;
        $this->author=$author;
    }

    public function readBook(){
        echo "Naslov kniga<br>";
        echo "- author xx<br>"; 
    }

public function getTitle(){//ovie se vikaat enkapsulacija toa e koga nekoj raboti u klasata gi sokrieme
    //a po edni im dademo pristup so pomos na getter ili setter ili nekoj drugi metodi znaci toa se vika enkapsulacija nakratko
    //koga davame pristap na nekoe privatno property , privatno so i da bilo protected , private so i da bilo preku nekoj metodi 
    
    return '"'.$this->title.'"';//this ni oznacuva deka zimame od ovaa klasa
}

public function setTitle($new_title){
    $this->title=$new_title;
}

public function getAuthor(){
    return " - ". $this->author;
}

}


?>
