<h2>Exercício Prático Calculadora</h2><br/>

<?php 
require_once('Calculadora.php');

$calc = new Calculadora();
$calc->add(12);
$calc->add(2);
$calc->sub(1);
$calc->mult(3);
$calc->div(2);
$calc->add(0.5);

echo "TOTAL: ".$calc->total();
$calc->clear();
