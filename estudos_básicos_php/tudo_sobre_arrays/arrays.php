<?php

//! array associativo é quando definimos as chaves manualmente


//! para definir um array, usamos os colchetes ou a palavra array

$array = [];

//! ou

$array = array();

//! podemos simplesmente adicionar valores dentro de um array ou fazer um mapeamento deles

$array = [
    1, 2, 3,
];

//! ou 

$array = array(
    1 => 'um',
    2 => 'dois',
    3 => 'tres',
);

//! a primeira chave do array, precisa ser inteiro ou string

$array = array(
    1 => 'um',
    'dois' => 'dois',
    3 => 'tres',
    'quatro' => 4,
);


/*

* arrays precisam ter como suas chaves números inteiros ou strings. Caso qualquer outro tipo seja utilizado, uma conversão vai acontecer.
    * Floats terão a parte “decimal” removida
    * Boleanos serão false = 0 e true = 1

*/

//! FUNCIONALIDADES DOS ARRAYS

//! usando o foreach

$array_associativo = [
    1 => 'um',
    2 => 'dois',
    3 => 'três'
];

foreach($array_associativo as $nomeNumero){ //* exibe o array
    echo $nomeNumero . PHP_EOL;
}
echo PHP_EOL;

foreach($array_associativo as $chave => $nomeNumero){ //* manipula os dados do array
    echo "$chave em português é: $nomeNumero" . PHP_EOL;
}
echo PHP_EOL;

//! contar o numero de elementos dentro de um array

foreach($array_associativo as $nomeNumero){ 
    echo $nomeNumero . PHP_EOL;
}
echo "Total: " . count($array_associativo) . PHP_EOL;//* podemos utilizar o count() ou sizeof(), ambos fazem a mesma coisa
echo "Total: " . sizeof($array_associativo) . PHP_EOL;
echo PHP_EOL;

//! Utilizando o FOR para percorrer um array

for ($i=0; $i < count($array_associativo) ; $i++) { 
    echo $array_associativo[$i] . PHP_EOL;
}
echo PHP_EOL;
//* Com esse código, a cada nova iteração a função count será chamada. Se nosso array tiver 100 elementos, a função será chamada 100 vezes. 
//* Isso pode acabar prejudicando a performance, 
//* então o ideal é chamar a função count antes do nosso for e ter seu resultado armazenado em uma variável.

