<?php

$contasCorrentes = [
    '993.993.993-81' => ['nome' => 'Alexandre', 'saldo' => 4000],
    '993.993.993-82' => ['nome' => 'João', 'saldo' => 3000],
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

$contasCorrentes['993.993.993-81'] = sacar($contasCorrentes['993.993.993-81'], 500) . PHP_EOL;

foreach ($contasCorrentes as $cpf => $itens) {
    echo $cpf . $itens['nome'] . $itens['saldo'] . PHP_EOL;
}
