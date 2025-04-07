<h2>Condicionário NULL CAO</h2><br/>

<?php 
$nome = 'Rafael';
$sobrenome = ' Boscolo'; 

$nomeCompleto = $nome;
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;

?>