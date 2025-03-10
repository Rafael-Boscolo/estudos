<?php
require_once('../Config.php');
require_once('../dao/UsuarioDaoMysql.php');

$usuarioDao = new UsuarioDaoMysql($pdo);

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($name && $email) {
    
    if($usuarioDao->findByEmail($email) === false) {
        $novoUsuario = new Usuario();
        $novoUsuario->setName($name);
        $novoUsuario->setEmail($email);

        $usuarioDao->add($novoUsuario);

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
