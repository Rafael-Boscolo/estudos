<h2>Exercício: Montando uma Tabela Vertical</h2>
<hr />

<?php

$array = [
    'nome' => 'Rafael',
    'empresa' => 'RF-code',
    'idade' => 33,
    'cor' => 'vermelho',
    'profissao' => 'dev',
    'periodo' => 2
];

?>

<table border="1">
    <?php foreach($array as $chave => $valor): ?>
        <tr>
            <td><?php echo $chave?></td>
            <td><?php echo $valor?></td>
        </tr>
    <?php endforeach; ?>
</table>
