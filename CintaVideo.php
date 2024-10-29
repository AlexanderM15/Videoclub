<?php
include_once("Soporte.php");

class CintaVideo extends Soporte{
    public $duracion;
    public function __construct($titulo,$numero,$precio,$duracion) {
        parent::__construct($titulo,$numero,$precio);
        $this->duracion=$duracion;
    }
         public function muestraResumen()
         {
            parent::muestraResumen();
            echo("Duracion: {$this->duracion } minutos <br> ");
         }



    }
?>