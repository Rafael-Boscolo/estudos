<h2>Entendendo Autoload:</h2>
<hr/>

<?php
require_once 'autoloader.php';

$a = new MatematicaBasica();
$b = new Divisao(22);

echo $a->somar(5,5);
echo '<br/>';
echo $b->dividirAno();