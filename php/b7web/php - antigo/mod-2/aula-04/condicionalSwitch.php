<h2>Condicional Swtich</h2><br/>

<?php 
$a = 30;
$b = 6;

// $condicao = 'Soma';
$condicao = 'Divisao';
// $condicao = 'Multiplicacao';
// $condicao = 'Diminuicao';

switch($condicao) {
    case $condicao == 'Soma';
        $resultado = $a + $b;
        echo "$condicao de A($a) + B($b) = $resultado";
        break;

    case $condicao == 'Divisao';
        $resultado = $a / $b;
        echo "$condicao de A($a) / B($b) = $resultado";
        break;

    case $condicao == 'Multiplicacao';
        $resultado = $a * $b;
        echo "$condicao de A($a) x B($b) = $resultado";
        break;

    case $condicao == 'Diminuicao';
        $resultado = $a - $b;
        echo "$condicao de A($a) - B($b) = $resultado";
        break;
}

// A condicao "switch não é tão utilizado quando o "if e else",
// porem utilizamos quando uma variavel pode ter diversas condicoes
// por exemplo uma requisiçao de CRUD.



?>