<h2>Array Keys e Array Values => array_keys() || array_values()</h2><hr/>

<?php 
echo "<strong> Array Normal </strong>";

$array = [ 
    'nome' => 'Rafael',
    'empresa' => 'RF-code',
    'idade' => 33, 
    'cor' => 'vermelho', 
    'profissao' => 'dev',
    'periodo' => 2
];

echo '<pre>';
    print_r($array);

echo '<hr/>';


// ARRAY KEYS
echo "<strong> Array Keys </strong>";
    // Gerando outro array pegando somente as chaves e passando para valores
$arrayKeys = array_keys($array);


echo '<pre>';
    print_r($arrayKeys);

echo '<hr/>';


// ARRAY VALUES
echo "<strong> Array Values </strong>";

    // Gera outro array pegando somente os valores e deixando como valores.
$arrayValues = array_values($array);
echo '<pre>';
    print_r($arrayValues);