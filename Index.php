<?php

require_once 'Motorista.php';
require_once 'Veiculo.php';
require_once 'Viagem.php';


$motorista1 = new Motorista(
    "Carlos",
    "111.111.111-11",
    "123456",
    2026
);

$motorista2 = new Motorista(
    "João",
    "222.222.222-22",
    "654321",
    2020
);


$veiculo = new Veiculo(
    "ABC-1234",
    "Caminhão",
    100,
    20
);

$veiculo->abastecer(30);


$viagem1 = new Viagem(
    "São Paulo",
    100,
    $motorista1,
    $veiculo
);

$viagem1->iniciarViagem();

$viagem1->gerarRelatorio();

?>