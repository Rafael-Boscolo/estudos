
<h3>Conceito de CRUD:</h3><hr/>
<link rel="stylesheet" href="styles/index.css">


<?php
require_once('Config.php');

$lista = [];
$sql = $pdo->query('SELECT * FROM usuarios');

if($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?=$usuario['id']; ?></td>
            <td><?=$usuario['name']; ?></td>
            <td><?=$usuario['email']; ?></td>
            <td>
                <button><a href="editar/editar.php?id=<?=$usuario['id'];?>">Editar</a></button>
                <button><a href="deletar/deletar.php?id=<?=$usuario['id'];?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a></button>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="create/Adding.php">Adicionar Usuário</a>


