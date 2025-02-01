<?php
include_once 'vehiculo.php';

class coche extends vehiculo {
    private $cilindrada;

    public function __construct($cili){
        parent::__construct();
        $this->cilindrada = $cili;
    }

    public function quemaRueda(){
        echo "Ruedasssss...";
    }

}    
?>