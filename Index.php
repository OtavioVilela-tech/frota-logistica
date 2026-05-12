<?php

require_once 'Motorista.php';
require_once 'Veiculo.php';
require_once 'Viagem.php';


echo "<h1>Sistema de Gestão de Frota</h1>";

$nome = "Otávio";
$cpf = "123.456.789-00";
$cnh = "987654";
$validadeCnh = 2026;

$veiculo = "Caminhão Volvo";


$motorista = new Motorista(
    $nome,
    $cpf,
    $cnh,
    $validadeCnh
);


$carro = new Veiculo(
    "ABC-3948",
    $veiculo,
    100,
    40
);


$carro->abastecer(20);

$viagem = new Viagem(
    "Belo Horizonte",
    200,
    $motorista,
    $carro
);

$viagem->iniciarViagem();

$viagem->relatorio();


$nome2 = "Vinicius";
$cpf2 = "999.888.777-00";
$cnh2 = "123456";
$validadeCnh2 = 2023;

$veiculo2 = "Mercedes";


$motorista2 = new Motorista(
    $nome2,
    $cpf2,
    $cnh2,
    $validadeCnh2
);


$carro2 = new Veiculo(
    "XYZ-5678",
    $veiculo2,
    120,
    60
);


$carro2->abastecer(30);

$viagem2 = new Viagem(
    "São Paulo",
    150,
    $motorista2,
    $carro2
);

$viagem2->iniciarViagem();

$viagem2->relatorio();

?>