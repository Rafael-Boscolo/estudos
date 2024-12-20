<h2>Condicional Ternario</h2><br/>

<?php
$age = 20;

// Condicional ternário é o if de uma linha só
$condicional = ($age >= 18) ? true : false;

if ($condicional) {
    echo "MAIOR";
} else {
    echo "MENOR";
}

?>