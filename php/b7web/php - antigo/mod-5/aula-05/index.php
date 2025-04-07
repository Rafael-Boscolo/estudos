<h2>Exercício: Montando uma Tabela Vertical</h2>
<hr />

<?php

$array = [
    'nome' => 'Rafael',
    'empresa' => 'RF-code',
    'idade' => 33,
    'cor' => 'vermelho',
    'profissao' => 'dev',
    'periodo' => 2,
    'cidade' => 'Perdoes'
];

$chaves = array_keys($array);
$valores = array_values($array);

?>

<table border="1">

    <tr style="font-weight: bold;">
        <?php foreach ($chaves as $chave) : ?>
            <td><?php echo $chave ?></td>
        <?php endforeach; ?>
    </tr>

    <tr>
        <?php foreach ($valores as $valor) : ?>
            <td><?php echo $valor ?></td>
        <?php endforeach; ?>
    </tr>

</table>