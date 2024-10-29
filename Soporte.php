<?php
class Soporte
{
    public $titulo;
    public $numero;
    public $precio;

    private static $iva = 0.21;
    public function __construct($titulo, $numero, $precio)
    {

        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->precio = $precio;
    }

    //Metodos:

    public function getPrecio()
    {
        return $this->precio;
    }
    public function getPrecioConIva()
    {
        return $this->precio * (1 + self::$iva);
    }
    public function muestraResumen()
    {
        echo "<strong>{$this->titulo}</strong><br>";
        echo "Número: {$this->numero}<br>";
        echo "Precio: {$this->getPrecio()} euros<br>";
        echo "Precio con IVA: {$this->getPrecioConIVA()} euros<br>";
    }
}
