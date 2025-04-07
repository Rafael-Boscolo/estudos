<h2>Funções Nativas de Array 1 e 2</h2><br/>

<?php 

/*
    count() => utilizamos para contar quantos intem tem em um array.

    A contagem do computador sempre começa do "0", mas a função "count()" ela conta
    normal partindo de 1 até "X" posições


*/

// ATIVIDADE 1

$nome = [
    'nome1',
    'nome2',
    'nome3',
    'nome4',
    'nome5'
];

echo "Total de itens no Array: ".count($nome)."<br/>";
$contagem = count($nome);

echo $nome[$contagem-1]."<br/>";

echo "<hr/>";

// ATIVIDADE 2

/*
    array_diff('parametro1', 'parametro2') => A função compara o primeiro "array" com o segundo e verificar quais
    os itens que não estão no segundo array.

    parametro1 => Array que será comparado
    parametro2 => Array usado para comparar
*/

$lista = [
    'pedro',
    'joao',
    'carlos',
    'bela',
    'francisca',
    'rafael'
];

$listaArovados = [
    'pedro',
    'carlos',
    'bela',
    'rafael'
];

$reprovados = array_diff($lista, $listaArovados);

print_r($reprovados);

echo "<hr/>";

// ATIVIDADE 3

/*
    array_filter('parametro1','parametro2') => Essa função varre um array e separa como e
    filtra utilizando a função no segundo parametro para separar os itens que deseja ser
    filtrados.

    parametro1 => array
    parametro2 => função com parametro.
*/
$listaNumero = [10, 30, 24, 56, 18, 7];

$filtrados = array_filter($listaNumero, function($item) {
    if($item < 30) {
        return true;
    } else {
        return false;
    }
});


print_r($filtrados);

echo "<hr/>";

// ATIVIDADE 4

/*
    array_map('parametro1','parametro2') => Essa função passamos no primeiro 'parametro'
    o que desejamos fazer com o array (função), no segundo 'parametro' informamos o array.

    parametro1 => Função que será aplicado
    parametro2 => Array 
*/

$listaDobrado = array_map(function($item){
    return $item *2;
}, $listaNumero);

print_r($listaDobrado);

echo "<hr/>";

// ATIVIDADE 5 (AULA 13)

/*
    array_pop() > é passado o array por referência, essa função remove o ulitmo item
    do array.
*/

$listaArray = [10, 20, 30, 40, 50, 60];

array_pop($listaArray);

print_r($listaArray);

echo "<hr/>";

// ATIVIDADE 6
/*
    array_shift() > É semelhante ao array pop, mas porém remove o primeiro item do array.
*/

$listaArray2 = [10, 20, 30, 40, 50, 60];

array_shift($listaArray2);

print_r($listaArray2);

echo "<hr/>";

// ATIVIDADE 7
/*
    in_array('parâmetro1','parâmetro2') > É passado dois parametros para fazer a busca dentro de um array

    1º parametro: o que procura no array
    2º parametro: array
*/

$listaArrayIn = [10, 20, 30, 40, 50, 60];
$listaArrayInNome = ['Rafael', 'Joao', 'Carlos', 'Quezia'];

if(in_array(15, $listaArrayIn)) {
    echo "EXISTE";
} else {
    echo "NÃO EXISTE";
}

echo "<br/>";

if(in_array('Ana', $listaArrayInNome)) {
    echo "EXISTE";
} else {
    echo "NÃO EXISTE";
}

echo "<hr/>";

// ATIVIDADE 8
/*
    arrya_search() > É passado dois parametros para fazer a busca dentro de um array

    1º parametro: o que procura no array, mas ele retorna a posição.
    2º parametro: array
*/

$listaArraySearch = [10, 20, 30, 40, 50, 60];

$posicao = array_search(40, $listaArraySearch);
echo $posicao;
echo "<br/>";

print_r($listaArraySearch[$posicao]);

echo "<hr/>";

// ATIVIDADE 9
/*
    sort() >  Ordena o array de forma crescente, mas altera a posição original.
    rsort() >  Ordena o array de forma decrescente, mas altera a posição original.

    asort() > Ordena o array de forma crescente, não altera a posição original.
    arsort() > Ordena o array de forma decrescente, não altera a posição original.
*/

$listaArrayNumeros = [18, 51, 20, 35, 5, 2, 91, 55];
$listaArrayNumerosR = [18, 51, 20, 35, 5, 2, 91, 55];
$listaArrayNumerosA = [18, 51, 20, 35, 5, 2, 91, 55];
$listaArrayNumerosAr = [18, 51, 20, 35, 5, 2, 91, 55];

print_r($listaArrayNumeros);

echo "<br/>";

sort($listaArrayNumeros);

echo "Array ordenado com SORT >>>";
print_r($listaArrayNumeros);

echo "<br/>";

rsort($listaArrayNumerosR);

echo "Array ordenado com RSORT >>>";
print_r($listaArrayNumerosR);

echo "<br/>";

asort($listaArrayNumerosA);

echo "Array ordenado com ASORT >>>";
print_r($listaArrayNumerosA);

echo "<br/>";

arsort($listaArrayNumerosAr);

echo "Array ordenado com ARSORT >>>";
print_r($listaArrayNumerosAr);

// ATIVIDADE 10
/*

*/
