<h2>Arrays Spread</h2><br/>

<?php
$bolo1 = [
    'açucar',
    'farinha',
    'ovo',
    'leite'
];

$bolo2 = [
    'vasilha',
    ...$bolo1,
    'corante',
    'agua morna'
];

// a função "print_r" imprimii a array com a sua posição na tela
print_r($bolo2);

// Utilizando o Array Spread
$listaAluno1 = ['Joao', 'Carlo', 'Anderson'];
$listaAluno2 = ['Ana', 'Maria', 'Julia'];
$listaJuncaoAluno = ['Jeferson', ...$listaAluno1, ...$listaAluno1, 'Lolita'];

echo '<br/>';
print_r($listaJuncaoAluno);
echo '<br/><br/>';

// echo count($listaJuncaoAluno);
echo "Imprimindo lista aluno com juncao: <br/><br/>";
for($i=0;$i < count($listaJuncaoAluno); $i++) {
    echo $i.' = '.$listaJuncaoAluno[$i].'<br/>';
}

?>