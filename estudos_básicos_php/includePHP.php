<?php

echo 'arquivo de funcões aqui' . PHP_EOL;

//include funciona para incluir um arquivo dentro de outro arquivo PHP
include ('funções2.php');

//podemos usar assim também

include 'funções2.php';

// infelizmente o include não para a função caso o nome esteja errado, ai vai rodar tudo do mesmo jeito

//_________________________________________________

//O require serve para que caso eu coloque um arquivo que não existe, ele para o código já no inicio e não continua o código
require ('arrays_associativos.php');
require 'arrays_associativos.php';

/*
o PHP trabalha com niveis de erros, ele possui os seguintes erros:

E_WARNING = É um aviso e não consegue r
E_NOTICE = É quando ele encontra um problema, mas consegue achar uma solução pro problema sozinho
E_ERROR = 
*/

//caso eu não tenha usado o arquivo nenhuma vez, eu uso essa função.
require_once 'estudos.php'; 

/*
Qual a diferença entre require e include?

Caso o arquivo a ser incluído não seja encontrado, "require" para a execução do programa enquanto "include" permite que continue.

Caso o arquivo não seja encontrado, "include" irá lançar um aviso (E_WARNING) enquanto "require" irá lançar um erro e não permitirá a execução do programa. 
Você pode conferir mais detalhes na documentação de include e require.
*/
/*

Nessa aula falamos sobre vários recursos da linguagem PHP.

Primeiro vimos como usar um array associativo dentro de uma string. Aprendemos:

para acessar um valor de um array associativo dentro de string devemos omitir as aspas da chave, por exemplo "$conta[titular]"
e alternativamente podemos usar chaves em volta do array, por exemplo: "{$conta['titular']}"
Também vimos que um código PHP pode ser separado em vários arquivos e orquestrar a execução podem usar include, require e require_once:

"include" não dá erro (apenas avisa) se o arquivo não existe
"require" dá erro
"require_once" garante que o arquivo será incluído apenas uma vez

Conhecemos que existem níveis de mensagens entre eles:

E_NOTICE, PHP dá um aviso mas "se vira" e continua com a execução
E_ERROR, PHP dá erro e para a execução do programa


*/