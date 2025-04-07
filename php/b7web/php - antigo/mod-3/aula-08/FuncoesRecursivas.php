<h2>Funções Recursivas</h2><br/>

<?php 
echo "<hr/>";
echo "<hr/>";

/* 
Uma função recursiva é quando ela é chamada dentro dela mesmas,
mas é preciso análisar bem sua lógica para não entra em loop 
infinito.
 */

function dividir($numero, int $divisor) {

    $metade = $numero / $divisor;
    echo $metade."<br/>";

    if(round($metade) > 0) {
        dividir($metade, $divisor);
    }

}

dividir(50, 3);
echo "<hr/>";
echo "<hr/>";


function multiplicar($numero) {

    for($i=1; $i<=10; $i++) {
        $resultado = $numero * $i;
        echo "$numero * $i = $resultado<br/>"; 
    }

    echo "<br/>";
    $numero++;

    if($resultado < 1000) {
        multiplicar($numero);
    }

}

multiplicar(1);
echo "<hr/>";
echo "<hr/>";