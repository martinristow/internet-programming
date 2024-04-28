<?php

class Avion{
    public $mlaz;//neso kaj motoro -> random neso 
    public $maksimalnaVisina;
    public $propeler;

    public function setPodatoci($mlazic,$visina,$propelercic){
        $this->mlaz = $mlazic;
        $this->maksimalnaVisina = $visina;
        $this->propeler = $propelercic;
    }

    public function getPodatoci(){
        return $this->mlaz . " " . $this->maksimalnaVisina . " " . $this->propeler;
    }

}

?>
