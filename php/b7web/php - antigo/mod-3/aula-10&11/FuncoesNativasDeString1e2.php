<h2>Funções Nativas de String 1 e 2</h2><br/>

<?php

// AULA 1/2

/*  
    A Função nativa "trim()" faz com que seja removido todo espaço
    em execoop dentro de uma variável.
*/

$nomeSujo = "     Rafael     ";
$nomeLimpo = trim($nomeSujo);

$nomeSujao = "   Rafael   B     F   Boscolo";

echo "Nome Sujo: ".strlen($nomeSujo)."<br/>";
echo "Nome Limpo: ".strlen($nomeLimpo)."<br/>";

echo "Nome Limpo 2: ".trim($nomeSujao)."<br/>";

echo "<hr/>";

/*
    strtolower() => Deixa a string toda em minúsculo
    strtoupper() => Deixa a string toda em maiúsculo
*/

$nome = "Rafael";

echo strtolower($nome)."<br/>";
echo strtoupper($nome)."<br/>";

echo "<hr/>";

/*
    str_replace() => Subtituir string por outra.
*/

$nomeSemSub = "Rafael Barboza";

$nomeAlterado = str_replace('Barboza', 'Boscolo', $nomeSemSub);

echo $nomeAlterado."<br/>";

echo "<hr/>";

/*
    substr() => Pega partes de uma string.
*/

$nomeCompleto = "Rafael Barboza Ferreira Boscolo";

echo substr($nomeCompleto, 0, 8)."<br/>";
echo substr($nomeCompleto, -6, 3)."<br/>";

echo "<hr/>";

/*
    strpos() => Mostra em que posição está a condição que procuramos
*/

$posicao = strpos($nomeCompleto, 'rreira');
echo $posicao."<br/>";

$posicao2 = strpos($nomeCompleto, 'r');

if($posicao2 > -1) {
    echo "ACHOU <br/>";
} else {
    echo "NÃO ACHOu <br/>";
}

echo "<hr/>";

/*
    explode() => Separa string e coloca em um array
*/

$arrayNome = explode(' ', $nomeCompleto);
print_r($arrayNome);
echo "<br/>";
$arrayNome = explode('a', $nomeCompleto);
print_r($arrayNome);

echo "<hr/>";

/*
    number_format() => formata o número no estilio BR, utilza-se 4 parametros
    ao qual os 2 últimos são opcionais, o 2º é a quantidade de casa decimais que queremos
    3º ',' > para dezena e 4º '.' > para milhar
*/

$number = 53326.45468;

echo "R$ ".number_format($number, 2, ',', '.');