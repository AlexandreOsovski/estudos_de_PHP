<?php 


class Conta
{

    //! sempre definir propriedades privadas e métodos públicos
    private $pessoa;
    private $cpf;
    private $saldo;


    public function __construct(string $cpf, string $pessoa)
    {
        $this -> pessoa = $pessoa;
        $this -> cpf = $cpf; 
        $this -> saldo = 0;
    }




    public function sacar ( float $valorSacar)
    {
        if($valorSacar > $this->saldo ){
            echo 'você nãp pode realizar essa operação';
            return;
        }
        $this->saldo -= $valorSacar;
    }


    public function depositar(float $valorDepositar)
    {
        if($valorDepositar < 0){
            echo 'você não pode realizar essa operação';
            return;
        }
        $this->saldo += $valorDepositar;
    }

    public function transferir($valorTransferir, conta $contaDestino)
    {
        if($valorTransferir > $this->saldo){
            echo 'você não pode transferir essa quantia';
            return;
        }
        $this->sacar($valorTransferir);
        
        //$this->depositar($valorTransferir, $contaTransferir); //*preciso informar qual qual a função da conta de destino
        $contaDestino->depositar($valorTransferir);
    }
/*

/  //? Adiciona valores as variáveis CPF e Pessoa(nome da pessoa)

/ public function AddCpf(string $cpf) //? como usei a classe contruct para construir o cpf e o nome, então não será mais necessario a utilização do método AddCpf
    {
        return $this->cpf = $cpf;
    }
    
/ public function AddPessoa($pessoa) //? como usei a classe contruct para construir o cpf e o nome, então não será mais necessario a utilização do método Addpessoa
    {
        return $this->pessoa = $pessoa;
    }

*/

    //? Mostra os dados separadamente

    public function recuperarSaldo()
    {
        return $this->saldo;
    }

    public function recuperarPessoa()
    {
        return $this->pessoa;
    }

    public function recuperarCpf()
    {
        return $this->cpf;
    }

    
    //? mostra todos os dados cadastrados (cpf, saldo, nome)

    public function MostrarDadosConta()
    {
        $dadoSaldo = $this->saldo;
        $dadoPessoa = $this->pessoa;
        $dadoCpf = $this->cpf;

        $dados = "olá $dadoPessoa, seu saldo é de : R$$dadoSaldo, seu CPF é: $dadoCpf";

        return $dados . PHP_EOL;
    }

}


