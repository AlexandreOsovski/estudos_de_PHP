<?php

//! para dizer que o titular extende a classe pessoa, podemos usar o "extends"
//? irei comentar as linhas de códigos que não vou utilizar nessa clase


class Titular extends Pessoa //* utilizando o extends, a classe Titular passou a ter as mesmas coisas que a classe Pessoa
{
    
    private $endereco;
    // private $cpfTitular; //* como nome e cpf estão na classe pessoa, não preciso mais utilzar novamente aqui
    // private $nomeTitular;


    public function __construct ( $cpf, string $nome, Endereco $endereco)
    {  

        //? podemos usar a classe Parent, a classe Parent chama o construtor da classe mãe, que nesse caso, é a classe (Pessoa)

        parent:: __construct($nome, $cpf); //? chamando o construtor da classe base, eu garanto que estou inicializando os atributos da classe mãe

        $this -> endereco = $endereco;

/*
        / $this -> cpfTitular = $cpfTitular;
        / $this -> nomeTitular = $nomeTitular;
        / $this -> ValidarNome($nomeTitular);
*/
    }
    

    
    //? retorna os valores pedidos

    public function recuperaEndereco() : Endereco //* metodo getter
    {
        return $this -> endereco;
    }

/*   public function RecuperaCpfTitular ()
    {
        return $this -> cpfTitular -> RecuperarCPF();
    }
/    public function RecuperarCPF()
    {
        return $this -> cpfTitular;
    }
*/
    public function RecuperarNome() : string //* metodo getter
    {
        return $this -> nomeTitular;
    }

//? implementar o CPF
    

}
