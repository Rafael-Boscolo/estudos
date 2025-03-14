<?php
require_once('../Config.php');
require_once('../dao/UsuarioDaoMysql.php');

$usuarioDao = new UsuarioDaoMysql($pdo);

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($id && $name && $email) {
    $usuario = new Usuario();
    $usuario->setId($id);
    $usuario->setName($name);
    $usuario->setEmail($email);

    $usuarioDao->update($usuario);

    header('Location: ../index.php');
    exit;

    } else {
        header('Location: editar.php?id='.$id);
        exit;
    }
