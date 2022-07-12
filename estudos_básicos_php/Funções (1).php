<?php

//sistena pensando em um banco

$listaContasComCPF = [
    '393.663.590-00' => ['Nome' => 'André', 'Saldo' => 10000],
    '660.154.550-39' => ['Nome' => 'Camila', 'Saldo' => 20000],
    '899.377.430-79' => ['Nome' => 'José', 'Saldo' => 30000]

];

$listaContasComCPF['782.419.870-72'] = ['Nome' => 'Midian', 'Saldo' => 40000]; //se deixar as chaves vazias, o valor retorna como 0
$listaContasComCPF['435.234.650-45'] = ['Nome' => 'Jocemar', 'Saldo' => 50000]; // //se deixar as chaves vazias, o valor retorna como 0

//realizar um saque (Subtrair o valor de uma conta)
$listaContasComCPF['393.663.590-00']['Saldo'] = $listaContasComCPF['393.663.590-00']['Saldo'] - 1;
//ou
$listaContasComCPF['393.663.590-00']['Saldo'] -= 1;


/*______________________________________________________________________________________________________*/

//sacar um valor do banco
$listaContasComCPF['782.419.870-72']['Saldo'] = $listaContasComCPF['782.419.870-72']['Saldo'] - 10;

//ou

$listaContasComCPF['782.419.870-72']['Saldo'] -= 10;

/*______________________________________________________________________________________________________*/

//Adicionar o valor em uma conta
$listaContasComCPF['899.377.430-79']['Saldo'] = $listaContasComCPF['899.377.430-79']['Saldo'] + 459;

//ou

$listaContasComCPF['899.377.430-79']['Saldo'] += 459;

/*______________________________________________________________________________________________________*/

//Mudar o nome do proprietário da conta
$listaContasComCPF['660.154.550-39']['Nome'] = 'Amanda';
$listaContasComCPF['899.377.430-79']['Nome'] = "Rodrigo";

/*______________________________________________________________________________________________________*/

//condição que procura apenas os dados do Saldo e mostra na tela
foreach ($listaContasComCPF as $lista => $contas_com_cpf) {
    echo $contas_com_cpf['Saldo'] . PHP_EOL; //pegando apenas o indice das contas
}
echo PHP_EOL;

//exibir todos os dados
foreach ($listaContasComCPF as $cpf => $contas_com_saldo) {
    echo 'Nome = ' .  $contas_com_saldo['Nome'] . " | CPF = " . $cpf .  ' | Saldo = R$' . $contas_com_saldo['Saldo'] . PHP_EOL;
}
echo PHP_EOL;


/*______________________________________________________________________________________________________*/

//condição que não permite adicionar valor negativo
$listaContasComCPF['660.154.550-39']['Saldo'] += -10;
if (0 > $listaContasComCPF['660.154.550-39']['Saldo']) {
    echo 'Não é possivel adicionar valor negativo' . PHP_EOL . PHP_EOL;
} else {
    $listaContasComCPF['660.154.550-39']['Saldo'];
}
echo PHP_EOL;


/*______________________________________________________________________________________________________*/

//condição que não me permite sacar mais do que eu tenho no banco

$valorRetirarContaMidian = $listaContasComCPF['782.419.870-72']['Saldo'];

$valorRetirarContaMidian -= 60000;

//verifica se o valor para o saque é permitido
if ($valorRetirarContaMidian < 0) {
    echo 'você não pode sacar essa quantia' . PHP_EOL;
} else {
    $valorRetirarContaMidian;
}

//verifica se o valor que ficou na conta é negativo
if ($valorRetirarContaMidian < 0) {
    echo 'valor negativo, iremos ajustar.... O valor atual é de' . ' = R$' . $valorRetirarContaMidian = 0 . PHP_EOL; //se o valor for nagativo, ele zera PHP_EOL;

} else {
    echo 'Valor correto' . ' = R$' . $valorRetirarContaMidian . PHP_EOL; //exibe o valor correto
}
echo PHP_EOL;

/*______________________________________________________________________________________________________*/

//isolar uma parte do código
function ExibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

$ValorRetirarContaAndre = $listaContasComCPF['393.663.590-00']['Saldo'];

$ValorRetirarContaAndre -= -60000;

//verifica se o valor para o saque é permitido
if (10000 < $ValorRetirarContaAndre) {
    ExibeMensagem("Você não pode sacar essa quantia");
} else {
    $ValorRetirarContaAndre;
}
echo PHP_EOL;
/*______________________________________________________________________________________________________*/

//Funções

/*
podemos usar as funções sem parâmentros
*/
function exibirOlaMundo()
{
    echo 'olá mundo';
}

exibirOlaMundo();

//funcção que recebe um valor

function adiciona2($x)
{
    echo $x;
}

