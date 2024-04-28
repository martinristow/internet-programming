<?php



    class Administrator{
    protected $name;

    public function setName($name){
        $this->name = $name;
    }

    public function createCourse($title, $description, $price){
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
    }

    public function getCourse(){
        echo $this->title . " " . $this->description . " " . $this->price;
    }

    public function editCourse($courseId, $title, $description, $price){
        
    }

    public function deleteCourse($courseId){

    }

    public function addParticipantToCourse($courseId, $participant){
        
    }
}

?>