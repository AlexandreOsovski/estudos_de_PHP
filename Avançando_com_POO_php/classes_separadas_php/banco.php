<?php


require 'src/conta.php';
require 'src/titular.php';
require 'src/endereco.php';
require 'src/cpf_titular.php';



$conta = new Conta(new Titular(new CPF('209.141.720-34'),'Alexandre', ( new Endereco ('rua das dores', '83303260', '20')))); 
var_dump($conta);



//! Podemos definir o endereço assim:
$endereco = new Endereco('rua salvatore da fonceca', '12345678', '7b');
$contaDois = new Conta( new Titular( new CPF('123.456.789-10') , 'Josias Franco', $endereco));


var_dump($contaDois);