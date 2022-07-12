<?php 

$idadeLista = [21, 22, 23, 24, 25];

for ($i=0; $i < 5 ; $i++) { 
    echo $idadeLista[$i] . PHP_EOL; //mostra todos os itens dentro de um array
    
}
echo PHP_EOL;

//Contar quantos itens tem dentro do array
echo count($idadeLista); //possui 5 números dentro da variável $idadeLista
echo PHP_EOL . PHP_EOL;

//Juntando tudo
for ($i=0; $i < count($idadeLista); $i++) { //com o count dentro do for, ele faz a contagem automáticamente
    echo $idadeLista[$i] . PHP_EOL;
}

/*
Aprendemos sobre a estrutura de dados Array. Vimos que um Array:

agrupa vários valores
também é chamado de vetor ou lista (isso depende da linguagem ou plataforma)
usa-se [] ou array() para declarar um novo array
acessa um elemento usamos os []
dentro dos [] vem a posição do elemento
possui um índice que por padrão começa com 0 (zero)
para acessar todos os elementos podemos usar uma estrutura de repetição
para saber quantos elementos um array tem existe a função count() 

*/

