<h2>Funções Anônimnas</h2><br/>

<?php 


/* 
Função anonima podemos criar ela como parametro ou inserir
em uma variável, como o nome ja diz ela é anônima por não ser 
necessário um nome para ela.
*/

$porcent = function(int $valor, int $porcentagem) {
    $calculo = $valor * ($porcentagem / 100);
    return $calculo;
};

echo $porcent(90,10);
echo "<hr/>";

$tabuada = function(int $numero) {

    for($i=1;$i<=10; $i++) {
        $resultado = $i * $numero;
        echo "$i * $numero = $resultado <br/>";
    }

    echo "<hr/>";

};

echo $tabuada(20);

/*
Nesse estudo utilizei a função anônima e a tipagem por parametro
para fazer o calculo de uma tabuada  "x".
*/