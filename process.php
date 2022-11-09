<?php

if (empty($_POST['name']) || empty($_POST['password'])){
    die('falha na validação');
}

$nome = strtolower($_POST['name']);

$nomes = [
    'josé luiz' => ['senha' => 1203, 'amigo' => 'marcos'],
    'cleide' => ['senha' => 3021, 'amigo' => 'manu'],
    'clara' => ['senha' => 4506, 'amigo' => 'allyson'],
    'bonnye' => ['senha' => 6504, 'amigo' => 'caroline'],
    'marcos' => ['senha' => 7809, 'amigo' => 'luiz'],
    'júlia' => ['senha' => 9807, 'amigo' => 'michele'],
    'allyson' => ['senha' => 2222, 'amigo' => 'eliene'],
    'michele' => ['senha' => 1047, 'amigo' => 'lara'],
    'elaine' => ['senha' => 8052, 'amigo' => 'cleide'],
    'manu' => ['senha' => 2580, 'amigo' => 'bonnye'],
    'rhauyta' => ['senha' => 9063, 'amigo' => 'zeneido'],
    'jason' => ['senha' => 3690, 'amigo' => 'beth'],
    'lucas' => ['senha' => 7053, 'amigo' => 'clara'],
    'caroline' => ['senha' => 3057, 'amigo' => 'lucas'],
    'eliene' => ['senha' => 9501, 'amigo' => 'levy'],
    'hilda' => ['senha' => 1509, 'amigo' => 'thiago'],
    'jullie' => ['senha' => 1101, 'amigo' => 'mônica'],
    'beth' => ['senha' => 2202, 'amigo' => 'simone'],
    'zeneido' => ['senha' => 3303, 'amigo' => 'rhauyta'],
    'mônica' => ['senha' => 4404, 'amigo' => 'hilda'],
    'lara' => ['senha' => 5505, 'amigo' => 'jason'],
    'levy' => ['senha' => 6066, 'amigo' => 'elaine'],
    'thiago' => ['senha' => 7077, 'amigo' => 'júlia'],
    'simone' => ['senha' => 8088, 'amigo' => 'jullie'],
];

if (!isset($nomes[$nome])){
    die('Nome errado, siga o padrão que foi digitado lá no grupo.');
}

if ($nomes[$nome]['senha'] != $_POST['password']){
    die('Senha errada, solicite ao Thiago a senha correta.');
}

echo ucfirst($nome) . ', seu amigo secreto é: <br>' . ucfirst($nomes[$nome]['amigo']);