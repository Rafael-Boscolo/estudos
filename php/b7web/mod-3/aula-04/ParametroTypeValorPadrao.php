<h2>Parâmetros: Type e Valor Padrão</h2><br/>

<?php 

// PARTE 1
// É possível deixar um parâmetro iniciar com um valor padrão
// fazemos como no exemplo abaixo.

function somar($n1, $n2=0, $n3=0) {
    $soma = $n1 + $n2 + $n3;

    return $soma;
}

$a1 = somar(10);
$b2 = somar(10,20);
$c3 = somar(10,20,30);

echo "$a1 <br/>";
echo "$b2 <br/>";
echo "$c3 <br/>";

// PARTE 2
// É possível fazer com que os parâmetros sejam tipados, onde
// só aceitamos aquele tipo de variável.

function concatenando(string $nome,int $idade, float $salario=1200.00) {
    $resultado = "$nome tem $idade anos e recebe um salário de R$ $salario";

    return $resultado;
}

echo "<br/>";
echo concatenando('Rafael', 25, 1500.00);
echo "<br/>";
echo concatenando('Rafael', 25);

?>