<h2>Array Slice => array_slice()</h2>
<hr />

<?php

$array = [
    'a',
    'b',
    'c',
    'd',
    'e',
    'f'
];


$retorno = array_slice($array, 0, 3);

print_r($retorno);
// var_dump($retorno);

// print_r($array);
// echo '<hr/>';


// foreach($array as $a) {
//     echo $a.'<br/>';
// };

// echo '<hr/>';

// echo '<pre>';
// var_dump($array);
// echo '<hr/>';