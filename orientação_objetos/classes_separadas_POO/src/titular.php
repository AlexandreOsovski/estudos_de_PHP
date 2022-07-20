<?php

class Titular
{
    private $cpfTitular;
    private $nomeTitular;


    public function __construct ( CPF $cpfTitular, string $nomeTitular)
    {
        $this -> cpfTitular = $cpfTitular;
        $this -> nomeTitular = $nomeTitular;
        $this -> ValidarNome($nomeTitular);

    }

    //? validação dos dados informados

    public function ValidarNome(string $nomeTitular)
    {
        if(strlen($nomeTitular) < 5){
            echo 'Caso seu nome tenha menos que 5 letras, informe seu sobrenome';
            exit();
        }
    }
    public function RecuperaCpfTitular ()
    {
        return $this -> cpfTitular -> RecuperarCPF();
    }
    public function RecuperarCPF()
    {
        return $this -> cpfTitular;
    }


    //? retorna os valores pedidos

    

    public function RecuperarNome() : string
    {
        return $this -> nomeTitular;
    }

//? implementar o CPF
    

}
