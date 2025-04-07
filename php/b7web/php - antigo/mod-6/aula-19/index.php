<h2>Entendendo a PSR-4:</h2>
<hr/>

<?php
require_once 'autoloader.php';

use matematica\MatematicaBasica as Basica;
use foto\Upload as Foto;

$a = new Basica();
echo $a->somar(5,2);

$f = new Foto();
