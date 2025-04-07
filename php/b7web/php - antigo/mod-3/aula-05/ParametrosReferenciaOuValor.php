<h2>Parâmetros: Referência ou Valor</h2><br/>

<?php 

// PARTE 1
// Passar variáveis por valor em uma função.
// Na maioria das vezes utilizaremos assim como está abaixo.

function somar($n1, $n2) {

    $total = $n1 + $n2;

    return $total;
}

$a = 3;
$b = 6;
$c = somar($a, $b);

echo $c;
echo "<br/><br/>";


// PARTE 2
// Quando passamos uma variável por referencia altera-se o valor
// dela no corpo do algoritmo.
// Para enviar como referencia utilizamos o "&" antes da variável.

function soma2($n1, $n2, &$total) {

    $total = $n1 +  $n2;
}

$d = 3;
$e = 6;
$soma = 0;

soma2($d, $e, $soma);

echo "$d + $e = $soma";
echo "<br/><br/>";


// PARTE 3
// O PHP possui algumas funções nativas que são passadas por
// referência, exemplos abaixo:

$lista = [5,9,7,10,56,6,4,1];

print_r($lista);
echo "<br/><br/>";
sort($lista);
print_r($lista);
