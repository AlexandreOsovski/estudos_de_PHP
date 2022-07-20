<?php


class Conta
{

    //! sempre definir propriedades privadas e métodos públicos
    private $pessoa;
    private $cpf;
    private $saldo;

    private static $numeroDeContas = 0 ;

    //? sempre que um new conta é criado, a função __construct é executada

    //! métodos mágicos são iniciados com 2 underlines no PHP

    public function __construct(string $cpf, string $pessoa) //? esse método serve para que quando a gente crie a conta, de cara definimos os valores dessa conta
    { //? contruct é executado quando uma nova instância é criada na memória

        $this->validarDados($pessoa);
        $this->ValidarCpf($cpf);
        $this->pessoa = $pessoa;
        $this->cpf = $cpf;
        $this->saldo = 0;

        Conta :: $numeroDeContas++; //* utilizando os dois pontos, é possivel acessar os metodos ou atributos estáticos
        
        //? podemos chamar a classe por 'Self'
        
        self :: $numeroDeContas++;
    }

    public function __destruct() //* destruct é executado quando a instancia deixa de existir na memória
    {
        self :: $numeroDeContas--;
        echo "Não há mais contas";
        
    }

    public static function numeroContas(){
        return Conta :: $numeroDeContas;
    }


    public function sacar(float $valorSacar)
    {
        if ($valorSacar > $this->saldo) {
            echo 'você nãp pode realizar essa operação';
            return;
        }
        $this->saldo -= $valorSacar;
    }



    public function depositar(float $valorDepositar)
    {
        if ($valorDepositar < 0) {
            echo 'você não pode realizar essa operação';
            return;
        }
        $this->saldo += $valorDepositar;
    }

    public function transferir($valorTransferir, conta $contaDestino)
    {
        if ($valorTransferir > $this->saldo) {
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


    private function validarDados($pessoa)
    {
        if (strlen($pessoa) < 5) {
            echo "O nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }


    private function ValidarCpf($cpf)
    {

        $numerocpf = preg_replace('/[^0-9]/', "", $cpf);

        if (strlen($numerocpf) != 11 || preg_match('/([0-9])\1{10}/', $numerocpf)) {
            return false;
        }

        $number_quantity_to_loop = [9, 10];

        foreach ($number_quantity_to_loop as $item) {

            $sum = 0;
            $number_to_multiplicate = $item + 1;

            for ($index = 0; $index < $item; $index++) {

                $sum += $numerocpf[$index] * ($number_to_multiplicate--);
            }

            $result = (($sum * 10) % 11);

            if ($numerocpf[$item] != $result) {
                return false;
            }
        }

        return true;
    }
}


//? criar uma nova classe do tipo cpf que só vai conter o numero do cpfe fazer com que o titular passe a usar essa classe
