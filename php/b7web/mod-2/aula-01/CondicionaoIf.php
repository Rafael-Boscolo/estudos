<h2>Condicional If</h2><br/>

<?php
$nameM = 'Joao';
$nameF = 'Ana';
$age = 18;
$sex = 'M';

// Condicional "IF" criada para verifica se uma pessoa do nome 
// x é maior de idade e de qual sexo

if ($age >= 18 && $sex == 'M') {
    echo "$nameM tem $age, é maior de idade e do sexo masculino";
} else if ($age <= 17 && $sex == 'M') {
    echo "$nameM tem $age, é menor de idade e do sexo masculino";
} else if ($age >= 18 && $sex == 'F') {
    echo "$nameF tem $age, é maior de idade e do sexo feminino";
} else {
    echo "$nameF tem $age, é menor de idade e do sexo feminino";
}

?>