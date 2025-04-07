
<h3>Conectando ao Banco de Dados:</h3><hr/>

<?php

$pdo = new PDO("mysql:dbname=teste_b7web_php;host=localhost", "root");

$sql = $pdo->query("SELECT * FROM usuarios WHERE id=1");

/* 
rowCount() faz a contagem de quantas consultas está vindo
do banco de dados
*/
echo "TOTAL:".$sql->rowCount();

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

echo "<hr/>";
var_dump($dados[0]);

echo "<hr/>";
print_r($dados[0]['email']);

echo "<hr/>";
echo "<pre>" ; print_r($dados);echo"</pre>";exit;