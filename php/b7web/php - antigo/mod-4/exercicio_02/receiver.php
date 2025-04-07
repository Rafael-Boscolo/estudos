<?php

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

if($nome) {
    $listaNome = file_get_contents('ListaNomes.txt');
    $listaNome .= "\n<li>$nome</li>";

    file_put_contents('ListaNomes.txt', $listaNome);

    header('Location: index.php');
    exit;

} else {
    header('Location: index.php');
    exit;

}