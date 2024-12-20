<?php
require_once('../Config.php');

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($name && $email) {

    /* 
        Para não ter duplicidade na hora de adicionar dados, pois se houver pode dar 
        conflito no acesso.
    */ 
    $sql = $pdo->prepare( 'SELECT * FROM usuarios WHERE email = :email');
    $sql->bindValue(':email', $email);
    $sql->execute();

    /*
        Abaixo é feita a verificação para ver se não há outro email igual cadastrado
        se o $sql->rowCount() retornar "1", é poque já temos um email cadastrado
    */
    if($sql->rowCount() === 0) {
        $sql = $pdo->prepare('INSERT INTO usuarios (name, email) VALUES (:name, :email)');
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        $sql->execute();
    
        header('Location:../index.php');
        exit;
    } else {
        header('Location: Adding.php');
        exit;
    }

} else { 
    header('Location: Adding.php');
    exit;
}