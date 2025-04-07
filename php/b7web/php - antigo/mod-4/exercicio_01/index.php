<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

if($nome){

    $expiracao = time() + (86400 * 30);
    setcookie('nome', $nome, $expiracao);

    echo "<h2>Olá $nome <a href='apagar.php'>Sair</a></h2>";

} else {

    $_SESSION['aviso'] = "Insira o nome corretamente";

    header('Location: login.php');
    exit;

}



