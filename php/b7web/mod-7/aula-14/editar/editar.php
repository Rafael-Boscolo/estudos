<?php
require_once('../Config.php');
require_once('../dao/UsuarioDaoMysql.php');

$usuarioDao = new UsuarioDaoMysql($pdo);

$usuario = false;
$id = filter_input(INPUT_GET, 'id');

if($id) {
    $usuario = $usuarioDao->findById($id);
}
if($usuario === false) {
    header('Location: ../index.php');
    exit;
}
?>

<h3>Editar Usuário:</h3>
<form  method="post" action="editar_action.php">

    <input type="hidden" name="id" value="<?=$usuario->getId();?>">
    <label for="name">
        Nome:<br/>
        <input id="name" type="text" name="name" value="<?=$usuario->getName();?>">
    </label><br/><br/>

    <label for="email">
        Email:<br/>
        <input id="email" type="email" name="email" value="<?=$usuario->getEmail();?>">
    </label><br/><br/>

    <input type="submit" value="Salvar">
</form>
