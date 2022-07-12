<?php

$notas = [
    9,
    8,
    10,
    7
];

//ordenar as notas
$notasDesordenadas = $notas;
echo "Notas desordenadas : $notasDesordenadas";
var_dump($notasDesordenadas);

echo PHP_EOL;

sort($notas);//fução que ordena o array
echo "Notas ordenadas: ";
var_dump($notas);
echo PHP_EOL;

//sort não funciona caso o array seja feito de strings, pois o sort ele compara elemento por elemento, e no caso da string, ordenaria em ordem alfabética

//como passar critérios de ordenação para o PHP

$notas_Alunos = [ //array multidimensional, possui arrays associativos dentro do array
        [
            'aluno' => 'Alexandre', 'nota' => 10,
        ],

        [
            'aluno' => 'Andre', 'nota' => 20,
        ],

        [
            'aluno' => 'joão', 'nota' => 8,
        ]
    ];

function ordenaNotas(array $nota1, array $nota2) : int{
    if ($nota1['nota'] > $nota2['nota']){
        return -1;
    }
    if($nota2['nota'] > $nota1['nota']){
        return 1;
    }
    return 0;
}


usort($notas_Alunos, 'ordenaNotas');
var_dump($notas_Alunos);
