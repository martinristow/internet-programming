<?php

require "User.php";
require "interfaceTest.php";
class Employee extends User implements InterfaceTest{

    public $cas;
    const test =3;
    public $najaven =1;
    public function __construct($novoIme,$novCas){
        parent::__construct($novoIme);

        $this->setCas($novCas);
    }

    
    public function isLogged($newNajaven){
        if($newNajaven === 111){
            $this->najaven = $newNajaven;
            echo "Welcome Back";
            
        }
        else {
            echo "netocen password";  
        }
        
    }


    protected function setCas($newCas){
        $this->cas = $newCas;
    }

    public function test($newtest){
        if(self::test == $newtest)
        {
            echo "tocna vrednost";
            
        }
        else{
            echo "ne";
            die();
        }
        
        
    }

    public function getCas(){
        return $this->cas . " " . parent::getIme() . " " . self::test;
    }

}

?>