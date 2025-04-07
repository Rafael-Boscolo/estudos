<h2>Array Splice => array_splice()</h2><br/>

<?php

$array = [
    'a',
    'b',
    'c',
    'd'
];

array_splice($array, 3,2);

echo '<pre>';
print_r($array);