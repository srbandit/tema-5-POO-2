<?php

abstract class Shape
{
    protected $alto;
    protected $ancho;
    abstract function area();
    
    protected function __construct($alto, $ancho)
    {
        $this->alto = $alto;
        $this->ancho = $ancho;
    }
    
}


class Triangulo extends Shape
{
   
    public function area()
    {
        return $this->ancho * $this->alto / 2;
    }
}


class Rectangulo extends Shape
{
    
    public function area()
    {
        return $this->alto * $this->ancho;
    }
}

$triangulo = new Triangulo(3, 5);
echo $triangulo->area();
echo "<br>";
$rectangulo = new Rectangulo(5, 3);
echo $rectangulo->area();
