<?php

//verificações de arrays

$notas = [
        'Alexandre' => 10,
        'João' => 5,
        'Cláudio' => 8,
        'Vanessa' => 3,
];

if (gettype($notas) === 'array'){ //se gettype($notas) é identico a um array, mostre 'isso é um array';
    echo 'isso é um array';
}

//tornando um pouco mais legivel

if (is_array($notas) === 'array'){//is_array é mais indicado pra saber se uma determinada variável é um array
    echo 'Sim, isso é um array';
}
echo PHP_EOL;

//verificar se um array é numérico

var_dump(array_is_list($notas));//retorna verdadeiro se o array é um array numérico, nesse caso, retornou 'bool(false)'

echo PHP_EOL;

$lista = [
    1,
    2,
    3,
];

var_dump(array_is_list($lista));// neste caso retornou 'bool(true)' , porque é um array numérico

