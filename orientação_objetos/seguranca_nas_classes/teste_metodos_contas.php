<?php

//! TESTES METODOS CONTAS

require('metodos_contas.php');


$contaUm = new Conta('089.993.919-81', 'abner'); //? deixei vazio apenas para não dar erro

//$contaUm->Addpessoa('Alexandre') ; //* comentário apenas para que não haja erro na hora da execução do código
//$contaUm->AddCpf('123.456.789-10');//* comentário apenas para que não haja erro na hora da execução do código

$contaUm->depositar(200);

echo $contaUm->MostrarDadosConta(); //*mostra o cpf cadastrado na memoria

//_____________________

$contaDois = new Conta('987.654.321-6' , 'Josias');

$contaDois->depositar(100);

echo $contaDois->MostrarDadosConta();

echo Conta :: numeroContas();




