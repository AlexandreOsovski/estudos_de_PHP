<?php


include 'src/conta.php';
include 'src/titular.php';
include 'src/endereco.php';
include 'src/cpf_titular.php';




$contaUm = new Conta(new Titular(new CPF('209.141.720-34'),'Alexandre', ( new Endereco ('rua das dores', '83303260', '20')))); 



//! Podemos definir o endereço assim:
$endereco = new Endereco('rua salvatore da fonceca', '12345678', '7b');
$contaDois = new Conta( new Titular( new CPF('123.456.789-10') , 'Josias Franco', $endereco));

$contaDois -> depositar(20);
$contaDois -> transferir($contaUm, 20);



var_dump($contaUm);
var_dump($contaDois);