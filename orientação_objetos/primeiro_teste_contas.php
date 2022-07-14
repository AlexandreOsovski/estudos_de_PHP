<?php 

require('src/contas.php');

$conta = criarConta('123.456.789-10', 'Alexandre', 90000);

var_dump($conta);