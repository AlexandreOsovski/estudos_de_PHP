<?php

class Titular
{
    private $cpfTitular;
    private $nomeTitular;
    private $enderecoTitular;


    public function __construct (string $cpfTitular, string $nomeTitular, string $enderecoTitular)
    {
        
        $this -> ValidarCPF($cpfTitular);
        $this -> ValidarNome($nomeTitular);
        $this -> ValidarEndereco($enderecoTitular);
    }

    //? validação dos dados informados

    public function ValidarNome($nomeTitular)
    {
        if(strlen($nomeTitular) < 5){
            echo 'Caso seu nome tenha menos que 5 letras, informe seu sobrenome';
            exit();
        }
    }
    public function ValidarCPF($cpfTitular)
    {
        if(strlen($cpfTitular) < 11){
            echo 'Informe todos os números do seu cpf';
            exit();
        }
    }

    public function ValidarEndereco ($enderecoTitular)
    {
        if(strlen($enderecoTitular) < 10){
            echo 'Por favor, digite corretamente o endereço completo';
            exit();
        }
    }

    //? retorna os valores pedidos

    public function RecuperarCPF()
    {
        return $this -> cpfTitular;
    }

    public function RecuperarNome()
    {
        return $this -> nomeTitular;
    }

    public function RecuperarEndereco()
    {
        return $this -> enderecoTitular;
    }

    

}
