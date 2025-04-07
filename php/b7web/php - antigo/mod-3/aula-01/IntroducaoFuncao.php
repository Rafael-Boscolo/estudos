<h2>Introdução a Funções</h2><br/>

<?php 

function soma($a, $b) {
    $soma = $a + $b;

    return $soma;
}

echo soma(15,20);

function calculo($parametro,$a,$b) {

    if($parametro == 'somar') {
        $calculo = $a + $b;
    } else if($parametro == 'diminuir') {
        $calculo = $a - $b;
    } else if($parametro == 'multiplicar') {
        $calculo = $a*$b;
    }


    return $calculo;
}
echo '<br/>';
echo '<br/>';
echo calculo('diminuir',10,30);

?>