<?php


    class Course {
    protected $id;
    protected $title;
    protected $description;
    protected $price;
    protected $participant = [];

    public function __contruct($id,$title,$description,$price){
        $this -> id = $id;
        $this -> title = $title;
        $this -> description = $description;
        $this -> price = $price;
    }

    public function addParticipant($participant){
        $this->participant[]=$participant;
        
    }

    public function getParticipant(){
        echo "<br>";
        foreach($this->participant as $part){
            echo $part;
            echo "<br>";
        }
    }

    public function removeParticipant($index){
        if(isset($this->participant[$index])){
            echo $this->participant[$index];
            unset($this->participant[$index]);
            
        }
     else {
        die("Vnesovte element nadvor od opsegot ");
        
     }
        
    }
}

?>