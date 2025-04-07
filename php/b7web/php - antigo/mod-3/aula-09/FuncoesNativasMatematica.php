<h2>Funções Nativas de Matemática</h2><br/>

<?php 

/*

*/

echo "<hr/>";
echo "<hr/>";

// TRANSFORMAR NUMERO NEGATIVO EM POSITIVO > abs()

$number = -8.5;

echo abs($number);

echo "<hr/>";
echo "<hr/>";

// ARREDONDAR PARA BAIXO > floor()

$a = 5.9;

echo floor($a);

echo "<hr/>";
echo "<hr/>";

// ARREDONDAR PARA CIMA > ceil()

$b = 5.2;

echo ceil($b);

echo "<hr/>";
echo "<hr/>";

// ARREDONDAR PARA O MAIS PRÓXIMO > round()
// A função round possui um segundo parâmetro que permite escolher
// quantas casas decimais quer em um número.

$c = 5.5659543;

echo round($c);
echo "<br/>";
echo round($c, 2);
echo "<br/>";
echo "<br/>";

echo pi()."<br/>";
echo round(pi(), 2);


echo "<hr/>";
echo "<hr/>";

// GERA UM NÚMERO ALEATÓRIO > rand()
// A função rand() recebe 2 parâmetros o (minímo, máximo);

$d = rand(1, 100);
echo $d;

echo "<hr/>";
echo "<hr/>";

// ACHAR O VALOR MÁXIMO OU MINIMO DE UMA ARRAYU
// PARA O MAIOr max();
// PARA MENOR min();

$array = [1, 5, 9, 4];

echo max($array)."<br/>";
echo min($array)."<br/>";