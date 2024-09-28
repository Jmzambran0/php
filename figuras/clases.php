<?php

interface IFigura {
    function area();
    function get();
}

abstract class Figura{
    private string $msg = 'hola mundo';

    abstract function area();

    function toString() {
        return $this->msg;
    }
}

class Cuadrado extends Figura {
    private int $arista;

    function __construct(int $arista) {
        $this->arista = $arista;
    }

    function setArista(int $value) {
        $this->arista = $value;
    }

    function getArista():int {
        return $this->arista;
    }

    function area():float {
        return pow($this->arista, 2);
    }
}

class Triangulo extends Figura {
    private int $base;
    private int $altura;

    function __construct(int $base, int $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    function setBase(int $value) {
        $this->base = $value;
    }

    function setAltura(int $value) {
        $this->altura = $value;
    }

    function getBase():int {
        return $this->base;
    }

    function getAltura():int {
        return $this->altura;
    }

    function area():float {
        return (($this->base * $this->altura)/2);
    }
}

$cuadrado = new Cuadrado(25);
echo "El area del cuadrado de 25*25 es: " . $cuadrado->area();

echo "<br>";

$triangulo = new Triangulo(30, 25);
echo "El area del triangulo con base 30 y altura 25 es: " . $triangulo->area();

?>