<h2>Desconstuindo usando list</h2><br/><hr/>

<?php 

$cadastro = [
    'Rafael',
    30,
    'M',
    'Dev'
];

list($nome, $idade, $sexo, $proficao) = $cadastro;

echo 'O '.$nome.' tem '.$idade.' anos é do sexo '.$sexo.' e atua como '.$proficao;