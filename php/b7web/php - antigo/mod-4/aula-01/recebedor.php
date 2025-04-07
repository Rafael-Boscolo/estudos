<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);

if($nome && $email && $idade) {

    $expiracao = time() + (86400 * 30); //igual a um mês
    setcookie('nome', $nome, $expiracao);

    echo "NOME: $nome <br/>";
    echo "EMAIL: $email <br/>";
    echo "IDADE: $idade";

} else {

    if(!$nome && $email && $idade) {
        $_SESSION['aviso'] = 'Preencha o nome corretamente!';
    } else if(!$email && $nome && $idade) {
        $_SESSION['aviso'] = 'Preencha o email corretamente!';
    } else if(!$idade && $nome && $email) {
        $_SESSION['aviso'] = 'Preencha a idade corretamente!';
    } else {
        $_SESSION['aviso'] = 'Preencha todos os campos corretamente!';
    }

    header('Location: index.php');
    exit;

}
