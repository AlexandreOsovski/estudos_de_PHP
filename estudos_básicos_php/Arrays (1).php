<?php
//ARRAYS

//Lista de dados

$idade = '11' ;
$idade2 = '12' ;
$idade3 = '21' ; //desse modo fica complicado e os erros são certeiros
$idade4 = '23' ;
$idade5 = '33' ; 

// Podemos fazer desse modo, adicionando todos os parâmetros dento de um array, vou citar 2 exemplos

$idadeList = array(11, 12, 21, 23, 33);
$idadeList2 = [11, 12, 21, 23, 33];


echo PHP_EOL . PHP_EOL;
//-----------------------------------------------------------
// A principal caracteristica de um vetor (array) é que ele possui chaves (índices) para que eu possa acessar, por padrão ele começa pelo número 0

$primeiraIdade = $idadeList[0]; //retorna o valor 11
echo $primeiraIdade . PHP_EOL;


$segundaIdade = $idadeList[1]; //retorna o valor 12
echo $segundaIdade . PHP_EOL;

//-----------------------------------------------------------

//Como exibir todas as idades em um loop

$idadeList3 = [45, 66, 21, 18, 14];

for ($i=0; $i < 5 ; $i++) { 
    echo $idadeList3[$i] . PHP_EOL; 
}

/* 
Esse código vai ficar rodando até que chegue no parâmetro do $i que foi imposta, 
ou seja, menor que 5 (número total de itens dentro do array), 
até quando não chegar nesse valor, ele irá incrementando e quebrando linha
*/

echo PHP_EOL . PHP_EOL;
//----------------------------------------------------------
//Exibir a quantidade de itens dentro de um array

$idadeList4 = [45, 66, 21, 18, 14, 45, 76, 42, 32];
echo count($idadeList4); //vai exibir a quantidade total de itens dentro de um array (nesse caso foi 9 itens)

//Exibir a quantidade de itens dentro de um array (um pouco mais complexo)

$idadeList4 = [45, 66, 21, 18, 14, 45, 76, 42, 32];

for ($i=0; $i < count($idadeList4) ; $i++) { 
  echo $idadeList4[$i] . PHP_EOL;  
}
//desse modo, eu não preciso ficar contando quantos itens possui dentro do array, utilizando o parâmetro COUNT(), ele automaticamente conta quando itens possui dentro do array

//----------------------------------------------------------//----------------------------------------------------------

/*
ARRAYS ASSOCIATIVOS 

Arrays associativos têm strings (geralmente significativas) como chaves, 
enquanto arrays numéricos (ou indexados) possuem apenas inteiros como suas chaves


*/

//Exemplo com conta corrente, utilizando strings dentro do array, para atribuir um índice a uma determinada string

$conta_1 = ['Titular' => 'Alexandre', 'CPF' => 11111111111 , 'Saldo' => 1000]; //os arrays associativos são separados por vírgula
$conta_2 = ['Titular' => 'Joana', 'CPF' => 22222222222 ,  'Saldo' => 2000];
$conta_3 = ['Titular' => 'Mariana', 'CPF' => 33333333333 , 'Saldo' => '1M'];

//E para acessar apenas os indices dentro da variavel?
echo $conta_1['Titular']; //retorna apenas o valor do 'Titular' 
echo $conta_2['CPF']; //retorna o valor do 'CPF'
echo $conta_3['Saldo']; //retorna o valor do 'Saldo'

echo PHP_EOL . PHP_EOL;

//poderia ser feito assim também
$contas_correntes = [$conta_1['Titular'], $conta_2['CPF'], $conta_3['Saldo']]; //retorna todos os valores que possuem dentro das variáveis

//fazer um loop e pegar apenas o titular das 3 contas

$contas_correntes_loop = [$conta_1, $conta_2, $conta_3];

for ($titular_contas= 0; $titular_contas < count($contas_correntes_loop) ; $titular_contas++) { //está fazendo um loop pelas contas, onde $contas vai exibir todas as contas existentes 
  echo $contas_correntes_loop[$titular_contas] ['Titular'] . PHP_EOL; //vai mostrar as contas existentes que foi atribuido a variavel $contas mas vai mostrar apenas os titulares 
}
echo PHP_EOL;

//Outro exemplo, pegando o CPF de cada conta
for ($cpf_contas = 0; $cpf_contas < count($contas_correntes_loop) ; $cpf_contas++) { 
  echo $contas_correntes_loop[$cpf_contas]['CPF'] . PHP_EOL;
}
echo PHP_EOL; 

//Pegando o saldo de cada conta
for ($saldo_contas = 0; $saldo_contas < count($contas_correntes_loop); $saldo_contas++) { 
  echo $contas_correntes_loop[$saldo_contas]['Saldo'] .PHP_EOL;
}
echo PHP_EOL;

/*
Arrays associativos com foreach

VANTAGENS: Não precisamos conhecer as chaves de cada item para percorrer seus valores

*/

foreach ($contas_correntes_loop as $titular ) { //para cada uma das contas correntes definida como $C
  echo $titular['Titular'] . PHP_EOL; //mostre os titulares de $c
}

echo PHP_EOL;

foreach ($contas_correntes_loop as $saldo){
  echo $saldo['Saldo'] . PHP_EOL;
}

echo PHP_EOL;

foreach($contas_correntes_loop as $cpf){
  echo $cpf['CPF'] . PHP_EOL;
}
echo PHP_EOL;

//Acessando e modificando o indice das contas (arrays)
$contas_correntes_loop = //por padrão, as variáveis possuem indices
                        [
                       'Alexandre' => $conta_1, //esse é o indice 0, porém, eu defini um indice novo para as variáveis
                       'Joana' => $conta_2, //esse é o indice 1, agora possuí indice 'Joana'
                       'Mariana' => $conta_3 //esse é o indice 2 e agora possui o indice 'Mariana'
                        ]; 

foreach ($contas_correntes_loop as $nomes => $nomes_contas) { //$contas_correntes_loop(variavel), $nomes(indice), $nomes_contas(valor do indice, serve para pegar um item que está dentro do indice, $nomes_conta[valor que eu quero pegar])
  echo $nomes . PHP_EOL;
}
echo PHP_EOL;

//podemos dar uma diminuida no código, para que não precisamos criar variáveis a mais, exemplo:

$contas_correntes_foreach = [

  'Abner' => ['CPF' => 999999999-99, 'Saldo' => 100000], //para ser mais correto, deveria ser adicionado um indice único, por exemplo, CPF
  'Bruno' => ['CPF' => 888888888-88, 'Saldo' => 10],
  'Gustavo' => ['CPF' => 777777777-77, 'Saldo' => 200000]

];

foreach($contas_correntes_foreach as $infos => $tudo_da_conta){
  echo $infos . PHP_EOL;
}
echo PHP_EOL;

//ADICIONANDO DADOS DENTRO DE UMA VARIAVEL

$contas_correntes_foreach = [

  'Abner' => ['CPF' => 999999999-99, 'Saldo' => 100000], 
  'Bruno' => ['CPF' => 888888888-88, 'Saldo' => 10],
  'Gustavo' => ['CPF' => 777777777-77, 'Saldo' => 200000]

];

$contas_correntes_foreach['Claudia'] = [
  'CPF' => 666666666-66 ,
  'Saldo' => 30000
];

foreach($contas_correntes_foreach as $infos => $tudo_da_conta){
  echo $tudo_da_conta['CPF'] . PHP_EOL;
}
echo PHP_EOL;

//Adicionar em uma variavel que eu não sei a quantidade de itens dentro dela

$listaNumeros = [20, 746, 982, 983, 9];

$listaNumeros[count($listaNumeros)] = 21;

foreach ($listaNumeros as $n){
  echo $n . PHP_EOL;
}
echo PHP_EOL;

//Adicionando itens sem informar indice

$listaNumeros2 = [203, 7462, 9821, 9834, 92];
$listaNumeros2[] = 213; //ele adiciona automaticamente após o ultimo indice caso o indice estiver vázio

foreach ($listaNumeros2 as $n2){
  echo $n2 . PHP_EOL;
}
echo PHP_EOL;

/* 

CASO EU TENHA UMA LISTA QUE POSSUA INFORMAÇÕES RELEVANTES, SEMPRE ADICIONAR O ITEM DENTRO DAS CHAVES, 
POR EXEMPLO, adicionar uma nova conta corrente $conta_corrente['João'] = ['CPF' => 444444444-44, 'Saldo' => 7362482]
Caso eu não adicione o valor dentro das chaves, o PHP entende que é pra adicionar um indice numérico no lugar do nome da pessoa

Se for uma 'lista numerica', basta colocar o valor das chaves vazio que já funciona

              $lista[] = $item; 
              Com esta sintaxe, o PHP adicionará o item no próximo índice NUMÉRICO disponível.

              $lista[$chave] = $item;
              Para adicionar um item informando seu índice, esta forma funciona perfeitamente.

*/

$listaContasComCPF = [
                      '393.663.590-00' => ['Nome' => 'André'],
                      '660.154.550-39' => ['Nome' => 'Camila'],
                      '899.377.430-79' => ['Nome' => 'José']

];

$listaContasComCPF['782.419.870-72'] = ['Nome' => 'Midian']; //se deixar as chaves vazias, o valor retorna como 0
$listaContasComCPF['435.234.650-45'] = ['Nome' => 'Jocemar']; // //se deixar as chaves vazias, o valor retorna como 0

foreach ($listaContasComCPF as $lista => $contas_com_cpf){
  echo $lista . PHP_EOL; //pegando apenas o indice das contas
}
echo PHP_EOL;

//pegando o nome das pessoas
foreach ($listaContasComCPF as $listaNomes => $todos_nomes_contas) {
  echo $todos_nomes_contas['Nome'] . PHP_EOL;
}

/* 

Tipos de chaves para se usar dentro das chaves 

o PHP só consegue trabalhar com ARRAYS ASSOCIATIVOS dentro das chaves se for STRING ou INTEIROS, qualquer tipo diferente disso, o PHP vai tentar converter para inteiro.

https://www.php.net/manual/pt_BR/language.types.array.php

*/


/*
O que aprendemos?

(1) A associação entre chave e valor é feito com =>
(2) A chave funciona como um índice explicito (definido por nós)
(3) o valor pode ser um valor primitivo ou outro array
(4) a chave deve ser do tipo inteiro ou string, todos os outros tipos o PHP tenta converter
(5) o laço foreach oferece uma forma mais expressiva de iteração
  (5.1) no foreach podemos acessar o índice e o valor do elemento da iteração
(6) arrays podem crescer e podemos adicionar novos elementos
(7) em arrays simples, com índice numérico, basta usar [] para adicionar um elemento no final (por exemplo, $lista[] = 12;)
  (7.1) nesse caso o PHP automaticamente incrementa o índice
*/


