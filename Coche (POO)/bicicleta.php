<?php
include_once 'vehiculo.php';

class bicicleta extends vehiculo {
    private $marchas;

    public function __construct($marchas){
        parent::__construct();
        $this->marchas = $marchas;
    }

    public function hazCaballito(){
        echo "Caballito...";
    }

}    
?>