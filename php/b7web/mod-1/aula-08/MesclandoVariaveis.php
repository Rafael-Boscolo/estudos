<h2>Mesclando Variaveis</h2><br/>

<?php
    $nome = 'Rafael';
    $sobrenome = 'Barboza';

    $a = 3;
    $b = 5;

    $c = 8;
    $d = '4';

    $i = 'oi';
    $texto = 'op';

    echo '<br/>';
    echo "<br/>Modelo 2<br/>";
    // concatenação de numeros
    echo $x = $a.$b;
    echo '<br/>';
    // calculos com numeros inteiros
    echo $x = $a*$b;

    echo '<br/>';
    echo "<br/>Modelo 3<br/>";
    /* 
        php interpreta parecido com o javascript, 
        entende que numero isolado na string é um numero
    */
    echo $y = $c+$d;

    echo '<br/>';
    echo "<br/>Modelo 4<br/>";
    echo "O nome do cliente é: $nome e o sobrenome é $sobrenome";
?>