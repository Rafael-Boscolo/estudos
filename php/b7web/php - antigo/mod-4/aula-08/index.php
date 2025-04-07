<h2>Escrevendo em Arquivos</h2><br/>

<?php 
$texto = 'Rafael Boscolo';

file_put_contents('nome.txt', $texto);

echo 'Arquivo criado com sucesso! <hr/>';

$textoGet = file_get_contents('texto.txt');
$textoGet .= "\nRafael Boscolo";

file_put_contents('texto.txt',$textoGet);

echo 'Arquivo alterado com sucesso! <hr/>';
