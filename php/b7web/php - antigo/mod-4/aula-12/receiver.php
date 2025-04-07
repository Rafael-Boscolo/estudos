<?php
// Imprimi quebrando linha, melhor visualização.
echo "<pre>";

// Imprimir caracteristicas do array(aquivo)
print_r($_FILES);

// Array para de permissão de quais tipos de arquivos o sistema vai aceitar.
$imgPermitidos = ['image/jpeg', 'image/png', 'image/jpg'];

//  Validação do arquivo.
if(in_array($_FILES['arquivo']['type'], $imgPermitidos)) {

    // Gerando nome aleatório.
    $nome = md5(time().rand(0,1000)).'.jpg';
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'assets/'.$nome);

    echo "Imagen Salvo com sucesso! <hr/>";
} else { 
    echo "Extensão de arquivo não permitido <hr/>";
}

/* 
    Arquivo é enviado como array, quebrando o arquivo array com explode
    para verifica a extensão do arquivo e validar.
*/ 
$texto = explode('/', $_FILES['arquivo']['type']);
print_r($texto); 

if($texto[1] == 'jpeg') {
    echo 'deu certo <hr/>';
} else {
    echo 'deu ruim <hr/>';
}