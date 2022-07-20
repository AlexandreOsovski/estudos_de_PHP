<?php


require 'src/conta.php';
require 'src/titular.php';
require 'src/cpf_titular.php';



$conta =
        new Conta(new Titular(
            new CPF(
                '209.141.720-34'
            ),
            'Alexandre'
        ));

var_dump($conta);
