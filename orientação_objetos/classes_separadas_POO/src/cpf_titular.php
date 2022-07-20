<?php


class CPF
{
    private $cpfTitular;

    public function __construct ( string $cpfTitular)
    {
        $this -> cpfTitular = $cpfTitular;
        $this -> ValidarCPF($cpfTitular);
    }

    public function ValidarCPF($cpfTitular)
    {
        if(strlen($cpfTitular) < 11){
            echo 'Informe todos os números do seu cpf';
            exit();
        }
    }

    public function RecuperarCPF() : string
    {
        return $this -> cpfTitular;
    }
}

