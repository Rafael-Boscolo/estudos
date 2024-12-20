<h2>Funções Nativas de Data e Hora</h2><br />

<?php

// ATIVIDADE 1

echo time();
echo "<hr/>";

echo date("d/m/Y H:i:s");
echo "<hr/>";

$data = date('w');

$diaSemana = $data + 1;

switch ($diaSemana) {
    case 1:
        echo "Hoje É: Domingo";
        break;

    case 2:
        echo "Hoje É: Segunda";
        break;

    case 3:
        echo "Hoje É: Terça";
        break;

    case 4:
        echo "Hoje É: Quarta";
        break;

    case 5:
        echo "Hoje É: Quinta";
        break;

    case 6:
        echo "Hoje É: Sexta";
        break;

    case 7:
        echo "Hoje É: Sabaádo";
        break;

    default:
        echo "Algo Deu Errado";
        break;
}

echo "<hr/>";

// ATIVIDADE 2
/*
    Formatar a data padrão vindo do banco de dados utilizamos a função:
    strtotime();
*/

$data2 = '1995-09-22';

echo date('d/m/Y', strtotime($data2));
echo "<hr/>";
