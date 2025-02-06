
<h3>Conceito de DAO:</h3><hr/>
<link rel="stylesheet" href="styles/index.css">

<?php
require_once('Config.php');
require_once('dao/UsuarioDaoMysql.php');

$usuarioDao = new UsuarioDaoMysql($pdo);

$lista = $usuarioDao->findAll();
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
            <td><?=$usuario->getId(); ?></td>
            <td><?=$usuario->getName(); ?></td>
            <td><?=$usuario->getEmail(); ?></td>
            <td>
                <button><a href="editar/editar.php?id=<?=$usuario->getId();?>">Editar</a></button>
                <button><a href="deletar/deletar.php?id=<?=$usuario->getId();?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a></button>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="create/Adding.php">Adicionar Usuário</a>


