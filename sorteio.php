<?php

$nomes = [
    'josé luiz',
    'cleide',
    'clara',
    'bonnye',
    'marcos',
    'júlia',
    'allyson',
    'michele',
    'elaine',
    'manu',
    'rhauyta',
    'jason',
    'lucas',
    'caroline',
    'eliene',
    'hilda',
    'jullie',
    'beth',
    'zeneido',
    'mônica',
    'lara',
    'levy',
    'thiago',
    'simone',
];

$cesto = $nomes;

foreach($nomes as $i => $nome)
{
    $array_size = count($cesto);
    $i_sorteado = rand(1, $array_size) - 1;

    echo $nomes[$i] . ' - ' . $cesto[$i_sorteado] . PHP_EOL;
    
    unset($cesto[$i_sorteado]);
    $cesto = array_values($cesto);
}