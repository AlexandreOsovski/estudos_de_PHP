<?php

//! Reaproveitamento de códigos

function mensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

$contasCorrentes = [
    '089' => ['Nome' => 'Alexandre', 'Saldo' => 8000],
    '090' => ['Nome' => 'Mariana', 'Saldo' => 9000],
];

$contasCorrentes['089'] = sacar($contasCorrentes['089'], 500);

function sacar(array $conta, float $valor): array
{
    if ($valor >  $conta['Saldo']) {
        mensagem('Você não pode sacar essa quantia');
    } else {
        mensagem($conta['Saldo'] -= $valor);
    }
    return $conta;
}

$contasCorrentes['090'] = depositar($contasCorrentes['090'], 500);

function depositar( array $conta, float $valorDeposito) : array
{
    if( $valorDeposito < 0 ){
        mensagem('Você não pode depositar essa quantia');
    } else {
        mensagem ($conta['Saldo'] += $valorDeposito);
    }
    return $conta;
}

foreach ($contasCorrentes as $NumeroConta => $dadosConta) {
    mensagem("Número da conta: $NumeroConta, Nome: {$dadosConta['Nome']} , Saldo: R$$dadosConta[Saldo]");
}

/* 
! todos esses procedimentos juntos, é chamado de programação procedural
? Não é uma boa prática de programação
? Orientação a objetos vem pra arrumar esses problemas que a programação procedural tem 

*/
