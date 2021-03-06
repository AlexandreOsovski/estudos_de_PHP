<?php

class Conta
{
    private $titular;
    private $saldo;
    


    public function __construct(  Titular $titular) //* dentro da construct eu estou chamando a classe titular
    {
        $this -> titular = $titular;
        $this -> saldo = 0;
    } 


    public function RecuperaNomeTitular ()
    {
        return $this -> titular -> RecuperarNome();
    }

    public function RecuperaCpfTitular ()
    {
        return $this -> cpfTitular -> RecuperarCPF();
    }


    public function sacar(float $valorSacar)
    {
        if($valorSacar > $this -> saldo){
            echo 'Você não pode sacar essa quantia';
            return;
        }
        $this -> saldo -= $valorSacar;
    }

    public function depositar(float $valorDepositar)
    {
        if($valorDepositar < 0){
            echo 'Você não pode depositar essa quantia';
            return;
        }
        $this -> saldo += $valorDepositar;
    }

    public function transferir ( Conta $contaReceber, float $valorTransferir)
    {
        if($valorTransferir > $this -> saldo){
            echo 'Você não pode fazer essa transferência';
            return;
        }
        $this -> saldo -= $valorTransferir;
        $contaReceber -> saldo += $valorTransferir;
    }


}