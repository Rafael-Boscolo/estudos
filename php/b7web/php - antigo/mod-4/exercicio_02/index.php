<form method="POST" action="receiver.php">
    <label for="">
        Novo Nome:
        <br/>
        <input type="text" name="nome" >
        <input type="submit" value="Adicionar">
    </label>
</form>

<h2>Lista de nomes</h2>
<?php

$listaNome = file_get_contents('ListaNomes.txt');

echo $listaNome;