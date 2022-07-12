<?php

$contasCorrentes = [
    '089.993.919-81' => ['nome' => 'Alexandre', 'saldo' => 4000],
    '089.993.919-82' => ['nome' => 'João', 'saldo' => 3000],
];

function sacar($conta, $valor)
{
    if ($valor > $conta['saldo']) {
        echo 'você não pode sacar essa quantia';
    } else {
        echo $conta['saldo'] -= $valor;
    }
    return $conta;
}

$contasCorrentes['089.993.919-81'] = sacar($contasCorrentes['089.993.919-81'], 500) . PHP_EOL;

foreach ($contasCorrentes as $cpf => $itens) {
    echo $cpf . $itens['nome'] . $itens['saldo'] . PHP_EOL;
}
