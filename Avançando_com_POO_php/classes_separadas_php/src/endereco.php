<?php 

class Endereco 
{

    private $rua;
    private $cep;
    private $numeroCasa;
    
    
    public function __construct ( string $rua, string $cep, string $numeroCasa)
    {
        $this -> rua = $rua;
        $this -> cep = $cep;
        $this -> numeroCasa = $numeroCasa;

        $this -> validaNumeroCasa($numeroCasa);
        $this -> validaCep($cep);
        $this -> validaRua($rua);
    }

    public function validaCep ($cep)
    {
        if(strlen($cep) < 8){
            echo 'informe um cep correto';
            exit();
        }
    }

    public function validaRua ($rua)
    {
        if(strlen($rua) < 10){
            echo 'digite o nome da rua da sua residencia completo';
            exit();
        }
    }

    public function validaNumeroCasa ($numeroCasa)
    {
        if(strlen($numeroCasa) <= 0){
            echo 'Número inexistente';
            exit();
        }
        
    }

    public function recuperaNumeroCasa ()
    {
        return $this -> numeroCasa;
    }

    public function recuperaRua()
    {
        return $this -> rua;
    }

    public function recuperaCep()
    {
        return $this -> cep;
    }



}


