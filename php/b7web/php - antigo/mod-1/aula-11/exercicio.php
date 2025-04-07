<h2>Exercicio</h2><br/>

<?php

use function PHPSTORM_META\map;

$lista = [
    'nome' => 'rafael',
    'idade' => 90,
    'atributos' => [
        'forca' => 60,
        'agilidade' => 80,
        'destreza' => 40
    ],
    'vida' => 1000,
    'mana' => 928
];

echo "NOME: ".$lista['nome']."<br/>"; 
echo "ATRIBUTO: ".$lista['atributos']['agilidade']."<br/>"; 
echo "MANA: ".$lista['mana']."<br/>"; 

?>