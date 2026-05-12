<?php

class Viagem {

    private string $destino;
    private float $distancia;
    private Motorista $motorista;
    private Veiculo $veiculo;

    public function __construct(
        string $destino,
        float $distancia,
        Motorista $motorista,
        Veiculo $veiculo
    ) {

        $this->destino = $destino;
        $this->distancia = $distancia;
        $this->motorista = $motorista;
        $this->veiculo = $veiculo;
    }

    public function iniciarViagem(): void {

        if($this->motorista->getValidadeCnh() < 2026) {

            echo "CNH vencida.<br>";
            return;
        }

        echo "Viagem iniciada.<br>";

        $this->veiculo->viajar($this->distancia);
    }

    public function relatorio(): void {

        echo "Destino: " . $this->destino . "<br>";

        echo "Motorista: " . $this->motorista->getNome() . "<br>";

        echo "Veículo: " . $this->veiculo->getModelo() . "<br>";

        echo "Combustível: " . $this->veiculo->getCombustivelAtual() . " litros<br>";

    }
}

?>