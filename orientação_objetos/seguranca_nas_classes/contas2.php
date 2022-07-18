<?php

//! TESTES METODOS CONTAS

require('metodos_contas.php');


$contaUm = new Conta('', ''); //? deixei vazio apenas para não dar erro

$contaUm->Addpessoa('Alexandre') ; 
$contaUm->AddCpf('123.456.789-10');

$contaUm->depositar(200);

echo $contaUm->MostrarDadosConta(); //*mostra o cpf cadastrado na memoria

//_____________________

$contaDois = new Conta('987.654.321-01' , 'Josias');

$contaDois->depositar(100);

echo $contaDois->MostrarDadosConta();




