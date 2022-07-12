<?php


//Números ímpares
for ($i=0; $i < 100 ; $i++) { 
    if ($i % 2 != 0){ //se o resto da divisão for diferente de 0
        echo $i . PHP_EOL;
    }
}
echo PHP_EOL;

//Números pares
for ($i=0; $i < 100 ; $i++) { 
    if($i % 2 != 1){
        echo $i . PHP_EOL;
    }
}
echo PHP_EOL;

//TABUADA
$multiplicador = 9;

for ($i=0; $i <= 10; $i++) { 
    $resultado = $multiplicador * $i;

    echo "$multiplicador x $i = $resultado" . PHP_EOL;
}
echo PHP_EOL;

//IMC

$altura = 1.76 ;
$peso = 80 ;

$imc = $peso / $altura**2;

if( $imc <  19){
    echo 'você está abaixo do peso';
} elseif($imc < 25 ){
    echo 'você está com o peso ideal';
}else{
    echo 'você está acima do peso'; 
}


