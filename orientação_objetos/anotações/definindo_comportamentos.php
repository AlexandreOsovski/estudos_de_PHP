<?php

//! primeiro método

class ContaTeste
{

    public $cpf;
    public $nome;
    public $saldo;


    //? função dentro de uma classe é chamada de método
    public function sacarTeste($contaAsacar, float $valorSacar) //* podemos usar uma variável apontando para o objeto, que nesse caso queremos sacar do saldo
    {
        if ($valorSacar > $contaASacar->saldo) { //* informamos $contaASacar->saldo para retirar a quantia
            echo 'Você não pode fazer esse saque' . PHP_EOL;
        } else {
            $contaASacar->saldo -= $valorSacar; //*$contaASacar->saldo -= $valorSacar que vamos informar
        }
    }
}

class Conta
{
    public $cpfTitular;
    public $nomeTitular;
    public $saldoTitular = 0; //* definimos o valor do saldo como zero, a apertir 

    //! podemos usar o $this para informar onde queremos acessar
    public function sacar(float $valorSacar) //* para facilitar, podemos usar a variável $this para apontar o objeto, fazendo isso, não precisamos usar outra variável no parâmetro
    {
        if ($valorSacar > $this->saldoTitular) { //* informamos $this->saldo para retirar a quantia, $this é uma referência
            echo 'Você não pode fazer esse saque';
        } else {
            $this->saldoTitular -= $valorSacar; //*$this->saldo -= $valorSacar que vamos informar
        }
    }

    public function depositar(float $valorDepositar)
    {
        if ($valorDepositar < 0){
            echo 'você não pode depositar essa quantia';
        } else {
            $this->saldoTitular += $valorDepositar;
        }
    }

    public function transferir($valorTransferir, conta $contaDestino)
    {
        if($valorTransferir > $this->saldoTitular){
            echo 'Você não pode fazer essa transferência';
        } else {
            $this->sacar($valorTransferir);
            $contaDestino->depositar($valorTransferir);
        }
    }
}


$primeiraConta = new Conta();

$primeiraConta->cpfTitular = '089';
$primeiraConta->nomeTitular = 'Alexandre';
$primeiraConta->saldoTitular = 90;


$segundaConta = new Conta();

$segundaConta->cpfTitular = '090';
$segundaConta->nomeTitular = 'Josias';
$segundaConta->saldoTitular = 0;


//? PARA SACAR UM VALOR, FAZEMOS ASSIM:
$primeiraConta->sacar(10);
var_dump($primeiraConta);//* retornou 80


//? DEPOSITAR
$primeiraConta->depositar(100);
var_dump($primeiraConta); //* retornou 180

//? TRANSFERÊNCIA
$primeiraConta->transferir(80, $segundaConta);
var_dump($primeiraConta);
var_dump($segundaConta);




//! MÉTODOS COM REFERÊNCIAS
