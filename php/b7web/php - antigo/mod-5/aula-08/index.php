<h2>Array Reduce => array_reduce()</h2><br/>

<?php 

$numeros = [1, 2, 3, 4, 5, 6];

function somar($subtotal, $item){
    $subtotal += $item;
    return $subtotal;
};

$soma = array_reduce($numeros, 'somar');
echo $soma;
echo '<hr/>';



$pessoas = [ 
    ['nome' => 'Rafael', 'sexo' => 'M', 'nota' => 10],
    ['nome' => 'Alaide', 'sexo' => 'F', 'nota' => 7],
    ['nome' => 'Jadir', 'sexo' => 'M', 'nota' => 5],
    ['nome' => 'Quezia', 'sexo' => 'F', 'nota' => 2],
    ['nome' => 'Joao', 'sexo' => 'M', 'nota' => 9]
];

// SOMA HOMENS
function somaHomem($sub, $item) {
    if($item['sexo'] === 'M') {
        $sub++;
    }
    return $sub;
};

// SOMA NOTAS
function somaNotaHomem($soma, $item) {
    if($item['sexo'] === 'M') {
        $soma += $item['nota'];
    }
    return $soma;
}

$totalHomem = array_reduce($pessoas, 'somaHomem');
$totalNotaHomem = array_reduce($pessoas, 'somaNotaHomem');

echo 'O total de homens são: '.$totalHomem.'<br/>';
echo 'O total da nota é: '.$totalNotaHomem;