<?php
require_once('../Config.php');

$indo = [];
$id = filter_input(INPUT_GET, 'id');

if($id) {
    $sql = $pdo->prepare('SELECT * FROM usuarios WHERE id = :id');
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0) {
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header('Location: ../index.php');
        exit;
    }

} else {
    header('Location: ../index.php');
    exit;
}
?>

<h3>Editar Usuário:</h3>
<form  method="post" action="editar_action.php">

    <input type="hidden" name="id" value="<?=$info['id'];?>">
    <label for="name">
        Nome:<br/>
        <input id="name" type="text" name="name" value="<?= $info['name'];?>">
    </label><br/><br/>

    <label for="email">
        Email:<br/>
        <input id="email" type="email" name="email" value="<?= $info['email'];?>">
    </label><br/><br/>

    <input type="submit" value="Salvar">
</form> 