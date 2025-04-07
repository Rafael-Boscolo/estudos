<h2>Arrays</h2><br/>

<?php
$frutas = [
    'laranja',
    'limao',
    'maracuja',
    'maçã'
];

$numeros = [
    1,
    2,
    3,
    4,
    5
];

$misto = [ 
    1,
    'ola',
    34,
    'joia'
];

echo "$frutas[1] e $frutas[0] <br/><br/>";

// imprimindo array com loop for
for($i = 0; $i < 4; $i++) {
    echo $i . '- ';
    echo $frutas[$i].'<br/>';
}

echo '<br/>';

for($i = 0; $i < 5; $i++) {
    echo $i . '- ';
    echo $numeros[$i].'<br/>';
}

echo '<br/>';

// imprimido array com tipos de variaveis diferentes
for($i = 0; $i < 4; $i++) {
    echo $i . '- ';
    echo $misto[$i].'<br/>';
}

?>