<h2>Entendendo Polimorfismo:</h2>
<hr/>

<?php
interface Polimorfismo {
    public function getTipo();
    public function getArea();
}

class Quadrado implements Polimorfismo {

    public int $altura;
    public int $largura;

    public function __construct($a, $l) {
        $this->altura = $a;
        $this->largura =$l;
    }

    public function getTipo() {
        return 'Quadrado';
    }
    public function getArea() {
        return $this->altura * $this->largura;
    }

}

class Circulo implements Polimorfismo {
    public int $raio;

    public function __construct($r) {
        $this->raio = $r;
    }

    public function getTipo() {
        return 'Circulo';
    }
    public function getArea() {
        return pi() * ($this->raio * $this->raio);
    }

}


$quadrado = new Quadrado(9,9);
$circulo = new Circulo(7);

$objetos = [ 
    $circulo,
    $quadrado
];

foreach($objetos as $objeto) {
    $tipo = $objeto->getTipo();
    $area = $objeto->getArea();

    echo "TIPO: ". $tipo . " - AREA: ". $area. "<br/>";
}