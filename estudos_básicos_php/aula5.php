<?php

function mensagem($mensagem)
{
echo $mensagem . PHP_EOL;
}

function sacar(array $conta , float $valor) : array
{
    if ( $valor > $conta['saldo']){
        mensagem('Você não pode sacar essa quatidade');
    }else{
        $conta['saldo'] -= $valor;
    }
    return $conta;
}


//pasagem por referência
                                                // se eu não utilizar o & comercial, eu estou pegando uma cópia da variável e retornando uma cópia modificada
function titularLetrasMaiusculas(array & $conta) // o & comercial indica que eu estou passando o valor real da conta e retornando ela modificada
{
    $conta['nome'] = strtoupper($conta['nome']);

    return $conta['nome'];
}

$contasCorrentes = [
    '993' => ['nome' => 'Alexandre', 'saldo' => '600'],
    '993' => ['nome' => 'Andre' , 'saldo' => 3000],
];

titularLetrasMaiusculas($contasCorrentes['993']); //chamando a função para deixar todas as letras maiusculas

$contasCorrentes['993'] = sacar($contasCorrentes['993'] , 500 );

foreach ($contasCorrentes as $key => $dadosConta) {
    mensagem(" Seu CPF é: $key, Seu nome é: $dadosConta[nome], Seu saldo é: $dadosConta[saldo]");
}
echo PHP_EOL;

//lista com mais de 1 item

$idadeList =
[ 21 , 23, 22];

//pegar os 3 valores em apenas 1 linha


foreach ($idadeList as $key => $idades) {
    [$idadeAlexandre, $idadeJoao, $idadeMaria ] = $idadeList;
    mensagem("A idade do Alexandre é $idadeAlexandre, a idade do João é $idadeJoao, e a idade da maria é $idadeMaria" . PHP_EOL);
}


foreach ($contasCorrentes as $cpf => $contas) //$contasCorrentes com $key passa a ser $contas
{
    list('nome' => $titular , "saldo" => $saldo) = $contas; //pega os dados da list que é igual a $contas
    mensagem("$cpf $titular $saldo") . PHP_EOL;
}
echo PHP_EOL;


foreach ($contasCorrentes as $cpf => $contas)
{
    ['nome' => $nome , 'saldo' => $saldo] = $contas;
    mensagem("$cpf $nome $saldo");
}
echo PHP_EOL;

//remover um item do array
/*

Em alguns casos pode fazer sentido excluir uma variável ou até mesmo o índice de um array da memória. Para isso, utilizamos a função unset.

*/

unset($contasCorrentes['993']);//caso a gente não use mais uma variável no restante do código, podemos usar o unset

//Podemos dar um unset em duas variáveis separadamente, é o mais correto.

unset($variavel1);
unset($variavel2);

//pode receber mais de uma variável para excluir por vez.

unset($variavel1, $variavel2);
