<?php


$contasCorrentes = [
    '089' => ['Nome' => 'Alexandre', 'Saldo' => 4000]
];

//adiciona conta
$contasCorrentes['090'] = ['Nome' => 'Josnei', 'Saldo' => 4000];

function mensagem($mensagem)
{
    echo $mensagem . PHP_EOL . '<br>';
}

function sacar($conta, $valor)
{
    if ($conta['Saldo'] < $valor) {
        mensagem('não é possível realizar o saque');
    } else {
        $conta['Saldo'] -= $valor;
    }
    return $conta;
}

function depositar($conta, float $valorDepositar)
{
    if ($valorDepositar <= 0) {
        mensagem('Não é possível depositar valores negativos ou zerados');
    } else {
        $conta['Saldo'] += $valorDepositar;
    }
    return $conta;
}

$contasCorrentes['089'] = sacar($contasCorrentes['089'], 49.90);
$contasCorrentes['089'] = depositar($contasCorrentes['089'], 499.90);

echo '<ul>';

foreach ($contasCorrentes as $numeroConta => $dadosConta) {
    ['Nome' => $nome, 'Saldo' => $saldo] = $dadosConta;
    mensagem("<li> CONTA: $numeroConta <br> NOME: $nome <br> SALDO: R$$saldo <br> </li>");
}

echo '</ul>';

//fechamento php
?>

<!--OUTRA FORMA DE MOSTRAR HTML NO PHP-->
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
            </dt>
            <dd>
                Saldo: <?= $conta['saldo']; ?>
            </dd>
        <?php } ?>
    </dl>
</body>

</html>

<?php
/* 

Nessa aula falamos finalmente sobre PHP na WEB! Aprendemos que:

-precisamos de um servidor para programar na web
--PHP já tem um servidor embutido
--o comando para rodar o servidor é: php -S localhost:8080

-a web sempre funciona no modelo de comunicação requisição e resposta
--o protocolo da web se chama HTTP (Hyper Text Transfer Protocol)

-as páginas web são construídas com a linguagem de marcação HTML, o navegador entende HTML

-podemos misturar código PHP com código HTML
--assim podemos criar HTML dinamicamente
--para tal é preciso demarcar o código PHP, abrindo e fechando a tag PHP: <?php ... ?>
--para imprimir algum valor podemos usar <?= $valor ?>
--existe muito código PHP da forma apresentada mas existem bibliotecas e frameworks que facilitam muito a criação de aplicações complexas aplicando boas práticas e padrões do mercado

*/