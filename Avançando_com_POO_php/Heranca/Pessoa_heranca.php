<?php

//! estudo sobre herança

/**
 * 
 *? public permite que todos possam acessar o membro, inclusive fora da classe onde foi definido, através de uma instância.
 *? protected permite que a classe atual e as classes filhas tenham acesso. private permite que apenas a classe atual tenha acesso.
 * 
 */

class Pessoa
{
                    //* bloqueio o acesso fora das classes
    protected $nome; //* utilizando protected, eu consigo acessar dentro da classe que foi definida e dentro das classes filhas (dentro de qualquer outra classe que use o extends Pessoa)
    private $cpf;


    public function __construct ($nome, CPF $cpf)
    {
        $this -> ValidaNome($nome);
        $this -> nome = $nome;
        $this -> cpf = $cpf;
    }

    //? validação dos dados informados

    protected function ValidaNome(string $nomeTitular) //* posso deixar como protected por que eu defini a variável como protected
    {
        if(strlen($nomeTitular) < 5){
            echo 'Caso seu nome tenha menos que 5 letras, informe seu sobrenome';
            exit();
        }
    }
    



    public function recuperaNome() //* metodo getter
    {
        return $this -> nome;
    }

    public function recuperaCPF() //* metodo getter
    {
        return $this -> cpf;
    }

}