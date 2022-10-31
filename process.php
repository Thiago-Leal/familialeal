<?php

if (empty($_POST['name']) || empty($_POST['password'])){
    die('falha na validação');
}

$nome = strtolower($_POST['name']);

$nomes = [
    'josé luiz' => ['senha' => 1203, 'amigo' => 'secretoooo'],
    'cleide' => ['senha' => 3021, 'amigo' => 'mariama'],
    'clara' => ['senha' => 4506, 'amigo' => 'secretoooo'],
    'bonnye' => ['senha' => 6504, 'amigo' => 'secretoooo'],
    'marcos' => ['senha' => 7809, 'amigo' => 'secretoooo'],
    'júlia' => ['senha' => 9807, 'amigo' => 'secretoooo'],
    'allyson' => ['senha' => 2222, 'amigo' => 'secretoooo'],
    'michele' => ['senha' => 1047, 'amigo' => 'secretoooo'],
    'elaine' => ['senha' => 8052, 'amigo' => 'secretoooo'],
    'manu' => ['senha' => 2580, 'amigo' => 'stivi'],
    'rhauyta' => ['senha' => 9063, 'amigo' => 'secretoooo'],
    'jason' => ['senha' => 3690, 'amigo' => 'secretoooo'],
    'lucas' => ['senha' => 7053, 'amigo' => 'secretoooo'],
    'caroline' => ['senha' => 3057, 'amigo' => 'secretoooo'],
    'eliene' => ['senha' => 9501, 'amigo' => 'secretoooo'],
    'hilda' => ['senha' => 1509, 'amigo' => 'secretoooo'],
    'jullie' => ['senha' => 1101, 'amigo' => 'secretoooo'],
    'beth' => ['senha' => 2202, 'amigo' => 'secretoooo'],
    'zeneido' => ['senha' => 3303, 'amigo' => 'secretoooo'],
    'mônica' => ['senha' => 4404, 'amigo' => 'secretoooo'],
    'lara' => ['senha' => 5505, 'amigo' => 'secretoooo'],
    'levy' => ['senha' => 6066, 'amigo' => 'secretoooo'],
    'thiago' => ['senha' => 7077, 'amigo' => 'secretoooo'],
    'simone' => ['senha' => 8088, 'amigo' => 'secretoooo'],
];

if (!isset($nomes[$nome])){
    die('Nome errado, siga o padrão que foi digitado lá no grupo.');
}

if ($nomes[$nome]['senha'] != $_POST['password']){
    die('Senha errada, solicite ao Thiago a senha correta.');
}

echo $_POST['name'] . ', seu amigo secreto é: <br>' . ucfirst($nomes[$nome]['amigo']);