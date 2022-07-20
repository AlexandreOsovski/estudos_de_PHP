<?php

//! Verificar as diferenças entre os arrays

$notas = [
    'maria' => 10,
    'João' => 3,
    'josé' => 5,
    'claudio' => 7
];

$notas2 = [
    'maria' => 9,
    'João' => 3,
    'josé' => 5,
    'claudio' => 7
];

var_dump(array_diff($notas, $notas2)); 
//* mostra a diferença nos arrays cujo os valores não estejam em outros arrays, nesse caso, retornou que o valor da maria do array $notas1 não está em $notas2
//* só mostra o valor diferente e não a chave do array. Posso ter duas chaves diferentes nos arrays, mas se o valor for igual, ele não mostra a diferença

echo PHP_EOL;

//!Mostrar a diferença entre as chaves

$notas3 = [
    'maria' => 10,
    'João' => 3,
    'josé' => 5,
    'claudio' => 7
];

$notas4 = [
    'maria' => 9,
    'João' => 5,
    'claudio' => 7
];

var_dump(array_diff_key($notas3, $notas4)); //* retornou o array que faltava, mesmo que joão tenha o mesmo valor que josé 

echo PHP_EOL;

//! Mostrar a diferença entre chaves e valores

$notas5 = [
    'maria' => 10,
    'João' => 3,
    'josé' => 5,
    'claudio' => 7,
    'Mario' => '7',
];

$notas6 = [
    'maria' => 9,
    'João' => 5,
    'claudio' => 7,
    'josé' => 5,
    
];

var_dump(array_diff_assoc($notas5, $notas6)); //* mostra a diferença tanto nas chaves quanto nos valores


//! mostrar qual as chaves faltantes com a comparação de arrays

$notas7 = [
    'maria' => 10,
    'João' => 3,
    'josé' => 5,
    'claudio' => 7,
    'Mario' => '7',
];

$notas8 = [
    'maria' => 9,
    'João' => 5,
    'claudio' => 7,
    'josé' => 5,
    
];

$alunosFaltantes = array_diff_key($notas5, $notas6);

var_dump(array_keys($alunosFaltantes)); //* retornou que o 'Mario' não possui no array $notas8

echo PHP_EOL;


//! Unindo os dados de dois ou mais arrays

$notas9 = [
    'maria' => 10,
    'João' => 3,
    'josé' => 5,
    'claudio' => 7,
    'Mario' => '7',
];

$notas10 = [
    'maria' => 9,
    'João' => 5,
    'claudio' => 7,
    'josé' => 5,
    
];

//*array_merge une vários arrays, porém, não preserva as chaves, são reescritaas
$unindoArrays = array_merge($notas9, $notas10); //*estou unindo os dados dos arrays $nota7 e $nota8 dentro de uma variável usando o array_merge
var_dump($unindoArrays);

echo PHP_EOL;

//! podemos usar o operador + para unir arrays

$notas11 = [
    'Clarice' ,
    'Geovana' ,
    'Tadeo' ,
    'henrique' ,
    
];

$notas12 = [
    'nome um',
    'nome dois',
    'nome três' ,
    'nome quatro' ,
    
];

$unindoArrays = $notas11 + $notas12; //* faz basicamente a mesma coisa que o array_merge, a diferença é que ele não sobrescreve o valor das chaves
var_dump($unindoArrays); //*não retorna os valores de $notas12


//! Spread operator

$notas13 = [
    'maria' ,
    'João' ,
    'josé' ,
    'claudio' ,
    'Mario',
];

$notas14 = [
    'maria' ,
    'João' ,
    'claudio' ,
    'josé',
    
];

//$unindoArrays = [...$notas9, 'Alexandre Valente Osovski' , ...$notas10]; //* Aqui eu posso adicionar um elemento solto entre os arrays, utilizando os 3 pontinhos
//var_dump($unindoArrays); //* irá retornar um erro de string nas versões menores que 8.1 do PHP

//! adicionando e removendo itens de um array


$notas15 = [
    'maria' ,
    'João' ,
    'josé' ,
    'claudio' ,
    'Mario',
];

$notas16 = [
    'maria' ,
    'João' ,
    'claudio' ,
    'josé',
    
];

$alunosAdicionados = [...$notas16, ...$notas16] ;//* desmonta os arrays informados
array_push($notas16 , 'Alice', 'bob', 'charlie');//* apenas mostra quantos elementos possui dentro do array, neste caso int[7]
var_dump($alunosAdicionados); //* retora todos os arrays desmontados que foram informados dentro da variavel e adiciona os elementos informados dentro de array_push

//! podemos usar o que aprendemos no inicio do curso para adicionar valores dentro do arrays

$alunosAdicionados[] = 'Marcelo'; // * adiciona o elemento no final do array
$alunosAdicionados[] = 'Josias';
$alunosAdicionados[] = 'Harry Potter';

var_dump($alunosAdicionados); //* retorna todos os elementos adicionados dentro do array
var_dump(array_push($alunosAdicionados)); //* exibe int(11), ou seja, possui 11 itens dentro desse array

//! adicionar e remover itens no inicio e no final do array

array_unshift($alunosAdicionados, 'Alice', 'rafaela'); //* passou esses nomes como os primeiros dentro do array, reordenou os indices
var_dump($alunosAdicionados);

echo PHP_EOL;

array_pop($alunosAdicionados);//* remove o ultimo item do array
var_dump($alunosAdicionados);


