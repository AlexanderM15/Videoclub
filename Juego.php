<?php
include_once("Soporte.php");
class Juego extends Soporte
{
    private $consola;
    private $minNumJugadores;
    private $maxNumJugadores;
    public function __construct($titulo,$numero,$precio,$consola, $minNumJugadores, $maxNumJugadores)
    {
        parent::__construct($titulo, $numero, $precio);
        $this->consola = $consola;
        $this->minNumJugadores = $minNumJugadores;
        $this->maxNumJugadores = $maxNumJugadores;
    }
    public  function muestraJugadoresPosibles()
    {
        if ($this->minNumJugadores === 1 && $this->maxNumJugadores === 1) {
            return "Maximo para un jugador";
        } elseif ($this->minNumJugadores === $this->maxNumJugadores) {
            return "Para{$this->minNumJugadores} jugador ";
        } else {
            return "De {$this->minNumJugadores} a {$this->maxNumJugadores} jugadores";
        }
    }

    public function muestraResumen() {
        parent::muestraResumen(); 
      
    }
}
