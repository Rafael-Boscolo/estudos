<h2>Entendendo o Namespace:</h2>
<hr/>

<?php

require_once "classe1.php";
require_once "classe2.php";
require_once "classe/basico/matematica.php";

// Quando for utlizar o nome da classe é so deixar ela no final.
use classe\basico\matematica\Basico;
// Quando quiser mudar o nome para ser chamado é so colocar o "as <NOME>".
use classe\basico\matematica\Basico as Bs;

$a = new Classe2\MinhaClasse();
echo $a->ver();

$b = new Basico();
echo $b->calculo();