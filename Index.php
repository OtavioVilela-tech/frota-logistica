<?php

require_once 'Motorista.php';
require_once 'Veiculo.php';
require_once 'Viagem.php';


$motorista1 = new Motorista(
    "Otavio",
    "111.111.111-11",
    "12345",
    2026
);

$motorista2 = new Motorista(
    "Vinicius",
    "222.222.222-22",
    "67890",
    2020
);


$veiculo1 = new Veiculo(
    "ABC-1234",
    "Volvo",
    100,
    20
);

$veiculo2 = new Veiculo(
    "XYZ-5678",
    "Mercedes",
    120,
    50
);


echo "<h2>Teste 1</h2>";

$viagem1 = new Viagem(
    "São Paulo",
    100,
    $motorista2,
    $veiculo1
);

$viagem1->iniciarViagem();


echo "<h2>Teste 2</h2>";

$veiculo1->abastecer(30);

$viagem2 = new Viagem(
    "Rio de janeiro",
    200,
    $motorista1,
    $veiculo1
);

$viagem2->iniciarViagem();

$viagem2->relatorio();

?>