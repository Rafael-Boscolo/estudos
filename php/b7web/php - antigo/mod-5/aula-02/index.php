<h2>Key Exists => key_exists()</h2><hr/>

<?php 

$array = [ 
    'nome' => 'Rafael',
    'empresa' => 'RF-code',
    'idade' => 33, 
    'cor' => 'vermelho', 
    'profissao' => 'deev'
];

if(key_exists('idade', $array)) {
    $idade = $array['idade'];
    echo $array['nome'].' tem '.$idade.' anos.';
} else {
    echo 'Campo idade não está no array';
    echo '<pre>';
    print_r($array);
}

echo '<hr/>';

$arrayNumber = [
    1, 
    2, 
    3, 
    4
];
echo '<pre>';
print_r($arrayNumber);

if(key_exists(4, $arrayNumber)) {
    echo 'ACHOU!';
} else {
    echo 'DEU RUIM';
}





// $valor = $array['idade'] * 2;
// echo $valor;