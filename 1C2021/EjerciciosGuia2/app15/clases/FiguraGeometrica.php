<?php

abstract class FiguraGeometrica{

    //Atributos
    protected $_color;
    protected $_perimetro; 
    protected $_superficie; 

    public function __construct() {

    }
    
    public function getColor() { return $this->_color; }
    
    public function setColor(string $colorP) { $this->_color = $colorP; }


    public abstract function Dibujar();
    protected abstract function CalcularDatos();

    //Virtuales (Se puede sobrescribir en una clase derivada)
    public function ToString() {

        echo "Información de la figura:<br>
        
        -Color: {$this->_color} <br>
        -Perimetro: {$this->_perimetro} <br>
        -Superficie: {$this->_superficie} <br>";
    }
}
