<?php

abstract class Shape
{
    abstract function area();
}


class Circulo extends Shape
{
    private $radio;
    public function __construct($radio)
    {
        $this->radio = $radio;
    }
    public function area(){
        return pi() * pow($this->radio, 2);
    }

}


$circulo = new circulo(3);
echo $circulo->area();
