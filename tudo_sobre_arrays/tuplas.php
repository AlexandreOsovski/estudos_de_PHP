<?php

//! estrutura de tuplas

/* 
? resultados de uma operação que pode dar erro
? o primeiro elemento é o resultado se deu certo ou se deu erro 
? o segundo resultado é o retorno esperado ou uma mensagem de erro

*/ 

$dados = ['Alexandre' , 10, 21];
list($nome, $nota, $idade) = $dados;

var_dump($nome, $nota, $idade);
echo PHP_EOL;

echo $nome . PHP_EOL;
echo $nota . PHP_EOL;
echo $idade . PHP_EOL;

echo PHP_EOL;

//! podemos formatar o array também

$dados2 = [
    'nome' => 'Alexandre',
    'nota' => 10,
    'estudo' => 'Engenharia de software'
];

['nome' => $nome, 'nota' => $nota, 'estudo' => $estudo] =  $dados2;

var_dump($nome , $nota, $estudo);

//! transformar as chaves de um array em variáveis

extract($dados2); //* pega um array compactado e separa em variáveis 
//* não usar em dados que não se conia
var_dump($nome , $nota, $estudo);

compact('nome', 'nota', 'estudo'); //* pega as variáveis separadas e compacta em um array


echo PHP_EOL; 
