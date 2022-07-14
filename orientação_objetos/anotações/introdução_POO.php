<?php



/*
*Precisamos primeiramente definir como o nosso código será, vamos dar a forma dele

    ! O que precisamos?
        ? criar a CLASSE.
            ? Dar o nome da classe
        ? definir o que vai ter dentro dessa classe
            ? o que uma conta básica tem?
                ? .cpf
                ? .Nome
                ? .Saldo

    ! Como definir os dados dentro da classe?
    

*/

//? criar a CLASSE.
class Conta //? Dar o nome da classe
{
//? definir o que vai ter dentro dessa classe
    public $cpfTitular;
    public $nomeTitular;
    public $saldoTitular;

}

$NovaConta = new Conta(); //? $NovaConta é o endereço para a classe conta, é uma referência

//var_dump($NovaConta); //* retornou valores nulos pois não foi definidos as variáveis da classe conta

//* para acessar um atributo no PHP, se utiliza -> 
//? esses são os objetos da classe, cpfTitular, nomeTitular e saldoTitular

$NovaConta->cpfTitular = '089';        //* definimos que o atributo CPF é '089'
$NovaConta->nomeTitular = "Alexandre"; //* definimos que o atributo NOME é 'Alexandre'
$NovaConta->saldoTitular = 200;        //* definimos que o atributo SALDO é 200

var_dump($NovaConta); //* retornou os valores que definimos nas variáveis [cpfTitular, nomeTitular, saldoTitular] do objeto CONTA

$segundaConta = new Conta();

$segundaConta->cpfTitular = '090';
$segundaConta->nomeTitular = 'Josias';
$segundaConta->saldoTitular = 90;

var_dump($segundaConta);

//__________________________________________________________________

class ContaCorrente
{
    public string $NumeroContaCorrenteTitular; //* definir o tipo de dado, seja string, float, etc... só a partir do php 7.4
    public string $NumeroAgenciaTitular;
    public string $LocalizacaoTitular;
}

$dadosTitular = new ContaCorrente();

$dadosTitular->NumeroContaCorrenteTitular = "99999-1" ;
$dadosTitular->NumeroAgenciaTitular = "876";
$dadosTitular->LocalizacaoTitular = 'São Paulo' ;

//echo $dadosTitular;//* não podemos usar o echo para mostrar os valores do objeto por que ele não pode ser convertido pra string, echo só mostra dados em string
var_dump($segundaConta);

/*

! Classe é a forma de bolo. Objeto é o bolo em si. 
! Quando criamos uma variável a partir de uma classe, estamos criando um objeto, e a classe é apenas o tipo deste objeto

! Dentro da classe, nos definimos os atributos.
    ? Atributos são dados que pertencem as classes
*/
/*
Em programação orientada a objetos, chama-se instância de uma classe, um objeto cujo comportamento e estado são definidos pela classe.



Por exemplo, a classe "Empregado" descreve os atributos comuns a todas as instâncias da classe "Empregado". 
Os objetos dessa classe podem ser semelhantes, mas variam em atributos tais como "nome" e "salário".

*/

$terceiraConta = $segundaConta;
//? a variável $terceiraConta está recebendo apenas os dados da variável $segundaConta e a variavel $segundaConta é o endereço para a "classe Conta"
//? caso os dados da $segundaConta já tenham sido definidos, a variável $terceiraConta ira puxar esses dados
//? toda mudança que ocorrer em $segundaConta, a variável $terceiraConta irá receber