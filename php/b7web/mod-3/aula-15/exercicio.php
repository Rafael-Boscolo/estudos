<h2>Exercicio Dia da Semana</h2><br />

<?php

function mostrarData(string $dataInserida) {

    $diaSemana = date('N', strtotime($dataInserida));
    $dia = date('d', strtotime($dataInserida));
    $mes = date('n', strtotime($dataInserida));
    $ano = date('Y', strtotime($dataInserida));

    $diaSemanaArray = [
        'Segunda-Feira',
        'Terça-Feira',
        'Quarta-Feira',
        'Quinta-Feira',
        'Sexta-Feira',
        'Sábado',
        'Domingo'
    ];

    echo "O dia $dia do mês $mes do ano de $ano é: ".$diaSemanaArray[$diaSemana-1];
}

mostrarData('2024-08-10');
