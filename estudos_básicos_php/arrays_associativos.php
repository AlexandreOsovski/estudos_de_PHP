<?php 

$conta1 = ['Titular' => 'Alexandre', 'Saldo' => '1000'];
$conta2 = ['Titular' => 'Joana', 'Saldo' => '2000'];
$conta3 = ['Titular' => 'guilherme', 'Saldo' => '23000'];

$contasCorrentes = [$conta1 , $conta2 , $conta3];

for ($i=0; $i < count($contasCorrentes); $i++) { 
    echo $contasCorrentes [$i] ['Titular'] . PHP_EOL ;
}

echo PHP_EOL;

//Para cada (Foreach)

foreach ($contasCorrentes as $conta){
    echo $conta['Titular'] . PHP_EOL;
}

//------------------------------------------------------------
echo PHP_EOL . PHP_EOL;
//------------------------------------------------------------

//para definir qual o indice da conta
$pessoa1 = ['Nome' => 'Pedro', 'Idade' => '14']; 
$pessoa2 = ['Nome' => 'Maria', 'Idade' => '27' ];
$pessoa3 = ['Nome' => 'Bruno', 'Idade' => '18'] ; 

$qtdPessoas = [ 
                123 => $pessoa1 , 
                456 => $pessoa2 , 
                789 => $pessoa3
            ];

foreach($qtdPessoas as $id => $humanos){ //a variável $id recebeu os números dos índices (123, 456, 789)
    echo $humanos['Nome'] . PHP_EOL;
    
}

//------------------------------------------------------------
echo PHP_EOL . PHP_EOL;
//------------------------------------------------------------

//PODEMOS DIMINUIR MAIS AINDA O CÓDIGO
//retiramos as variáveis $pessoa 1, 2 e 3 e passamos junto para os índices

$qtdPessoas = [ 
                123 => ['Nome' => 'Pedro', 'Idade' => '14'], 
                456 => ['Nome' => 'Maria', 'Idade' => '27' ], 
                789 => ['Nome' => 'Bruno', 'Idade' => '18']
                ];

foreach($qtdPessoas as $id => $humanos){
    echo $humanos['Nome'] . PHP_EOL;
    
}

//------------------------------------------------------------
echo PHP_EOL . PHP_EOL;
//------------------------------------------------------------

//ADICIONANDO DADOS

//Para adicionar um dado no PHP, podemos simplesmente deixar as chaves vazias []

