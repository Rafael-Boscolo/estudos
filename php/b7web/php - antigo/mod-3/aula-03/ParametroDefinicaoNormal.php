<h2>Parâmetros: Definição Normal</h2><br/>

<?php 

// função desenvolvida para adicionar numero sequencial de 1 a 10 dentro de uma array
function addNumeroArray($numero) {

    for($i=0;$i<$numero;$i++) {
        $array[$i] = ($i+1);
    }
    return print_r($array);
}

echo addNumeroArray(10);
