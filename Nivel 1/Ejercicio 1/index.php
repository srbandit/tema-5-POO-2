<?php

abstract class Animal{


   abstract function makeSound();
}


class Perro extends Animal{
    function makeSound()
    {
        return "Bup, bup!";
    }
}

class Gato extends Animal{
    function makeSound()
    {
        return "Mi!";
    }
}


?>