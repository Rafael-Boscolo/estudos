<h2>Funções Flechas (Arrow Function)</h2><br/>

<?php 

$dizimo = fn(int $valor) => $valor * 0.1;

echo $dizimo(985);
echo "<hr/>";

$soma = fn($n1, $n2=0) => $n1 + $n2;

echo $soma(5,3);
echo "<br/>";
echo $soma(5.5,3.6);

echo "<hr/>";


/*
Com a arrow function é possivel somente se a função criada
tiver uma linha de código e não precisa do "return", pois a 
variável no início ja vai receber o valor que será retornado.
*/