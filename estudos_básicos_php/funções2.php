<?php


//Função
require 'includePHP.php';
function mensagem($mensagem)
{ //subrotina executa e não devolve valor nenhum

    echo $mensagem . PHP_EOL;
}

$contasCorrentes = [
    '993.993.993-84' => ['Nome' => 'Alexandre', 'Saldo' => 4000],
    "993.993.993-82" => ['Nome' => 'Alexadre Osovski', 'Saldo' => 3000],
    '993.993.993-83' => ['Nome' => 'Alexandre Valente', 'Saldo' => 2000],
];

$contasCorrentes['993.993.993-84'] = sacar($contasCorrentes['993.993.993-84'], 500);
$contasCorrentes['993.993.993-82'] = sacar($contasCorrentes['993.993.993-82'], 500);

//função executa e devolve um valor

function sacar(array $conta, float $valor) : array 
 //adicionar o parâmetro float indica que só podemos adicionar valores numéricos
{
    if ($valor > $conta['Saldo']) { //se valor da conta for maior que o valor da conta
        mensagem($conta . $conta['Nome'] . 'você não pode sacar essa quantia.'); //você não pode sacar
    } else {
        mensagem($conta['Saldo'] -= $valor); //se não, pega o valor da conta e retira o valor informado
    }
    return $conta;
}

$contasCorrentes['993.993.993-83'] = depositar($contasCorrentes['993.993.993-83'], 1.45);

function depositar(array $conta, float $valorDepositar) : array //o array no final define que estamos esperando que o valor retornado seja um array
{ //adicionar o parâmetro "float" indica que só podemos adicionar valores numéricos
    if($valorDepositar <= 0){ //se o valor a ser depositado for menor que
        mensagem('Os valores precisam ser positivos');
    }else{
        $conta['Saldo'] += $valorDepositar;
    }
    return $conta;
}

foreach ($contasCorrentes as $cpfContas => $contas) {
    mensagem('CPF: ' . $cpfContas . ' | Seu nome é: ' . $contas['Nome'] . ' | valor na conta R$: ' . $contas['Saldo']);
}

/* 

- Uma função encapsula uma funcionalidade/um código
- Uma função usa a palavra chave function, possui um nome, pode ter parâmetros, tem um corpo e pode ter um retorno
- Para chamar uma função usamos o nome dela passando o valor dos parâmetros
- Uma função pode especificar os tipos na declaração do parâmetro (a partir da versão 7), como também o tipo do retorno


*/

//CONCATENAR CORRETAMENTE

//strings simples

//quando temos arrays associativos dentro de uma string, poremos tirar as aspas que estão dentro das chaves ao utilizar aspas duplas no inicio e no final
foreach ($contasCorrentes as $cpfContas => $contas) {
    mensagem( "$cpfContas $contas[Nome]  $contas[Saldo]");
}


//Quando temos um dado mais complexo de ser tratado dentro de uma string, nós colocamos ele dentro de colchetes e adicionamos as aspas novamente
foreach ($contasCorrentes as $cpfContas => $contas) {
    mensagem( "$cpfContas {$contas['Nome']}  $contas[Saldo]");
}
