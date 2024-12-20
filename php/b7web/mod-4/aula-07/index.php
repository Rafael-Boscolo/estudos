<h2>Lendo Arquivos</h2><br/>

<?php 
$texto = file_get_contents('texto.txt');
$texto = explode('.', $texto);

echo count($texto).'<hr/>';
print_r($texto);
