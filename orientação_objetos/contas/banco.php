<?php


require 'src/conta.php';
require 'src/titular.php';

$contaUm = new ContaTitular(new Titular( '92837492837','akjshdkjahsd','dlçajshdkjahsdkah' ));
$contaUm->depositar(30);

var_dump($contaUm);