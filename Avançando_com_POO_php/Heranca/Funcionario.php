<?php 

class Funcionario extends Pessoa 
{

    private $cargo;

    public function __construct ($cargo , $nome, $cpf)
    {
        parent :: __construct($nome, $cpf); //? estou chamando construct da classe Pessoa
        $this -> cargo = $cargo;
    }

    public function recuperaCargo () //* metodo getter
    {
        return $this -> cargo;
    }

    public function alteraNome($nome) //* metodo setter
    {
        $this -> ValidaNome($nome);
        $this -> nome = $nome;

    }

}


