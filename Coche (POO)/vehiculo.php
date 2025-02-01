<?php
class Vehiculo {
    private static $Vehiculoscreados = 0;
    private static $Kms_totales = 0;
    private $Kms_recorridos;

    public function __construct(){
        self::$Vehiculoscreados++;  // Se incrementa correctamente la variable estática
        $this->Kms_recorridos = 0;
    }

    public static function getVehiculosCreados(){
        return self::$Vehiculoscreados; // Acceder correctamente a la variable estática
    }

    public static function getKmTotales(){
        return self::$Kms_totales; // Acceder correctamente a la variable estática
    }

    public function getKmRecorridos(){
        return $this->Kms_recorridos;
    }

    public function recorre($km){
        self::$Kms_totales += $km; // Se actualiza correctamente la variable estática
        $this->Kms_recorridos += $km;
    }
}
?>