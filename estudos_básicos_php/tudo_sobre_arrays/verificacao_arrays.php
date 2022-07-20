<?php

//!verificações de arrays

$notas = [
    'Alexandre' => 10,
    'João' => 5,
    'Cláudio' => 8,
    'Vanessa' => 3,
];

if (gettype($notas) === 'array') { //* se gettype($notas) é identico a um array, mostre 'isso é um array';
    echo 'isso é um array';
}

//!tornando um pouco mais legivel

if (is_array($notas) === 'array') { //* is_array é mais indicado pra saber se uma determinada variável é um array
    echo 'Sim, isso é um array';
}
echo PHP_EOL;

//!verificar se um array é numérico

var_dump(array_is_list($notas)); //* retorna verdadeiro se o array é um array numérico, nesse caso, retornou 'bool(false)'

echo PHP_EOL;

$lista = [
    1,
    2,
    3,
];

var_dump(array_is_list($lista)); //* neste caso retornou 'bool(true)' , porque é um array numérico

echo PHP_EOL;


//!verificando se uma key existe dentro de um array

$notas = [
    'Alexandre' => 10,
    'Vanessa' => 5,
    'Cláudia' => 8,
    'José' => 9
];

var_dump(array_key_exists('Alexandre', $notas));//* retornou bool(true), pois vai me dizer se o valor dentro do array é verdadeiro ou não
                                                //* array_key_exists mostra se a chave existe

echo PHP_EOL;

//!verificar se o array não é nulo

$notas2 = [
    'Alexandre' => 10,
    'Vanessa' => NULL,
    'Cláudia' => 8,
    'José' => 9
];


//* "isset" verifica se uma variável está definida
var_dump(isset($notas2['Vanessa']));//* o isset está verificando se o indice dessa variável não é nulo


//! Procurar dentro do array um valor

var_dump(in_array(10, $notas2)); //* somente retorna que dentro de $notas possui o valor 10
var_dump(array_search(10, $notas2));//* pega a chave do valor 10
var_dump(array_search(8, $notas2, true)); //* definindo true, eu digo que quero que seja uma busca detalhada, nesse caso, apenas pegue inteiros e não strings
