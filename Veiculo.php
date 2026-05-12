<?php

class Veiculo {

    private string $placa;
    private string $modelo;
    private float $capacidadeTanque;
    private float $combustivelAtual;

    public function __construct(
        string $placa,
        string $modelo,
        float $capacidadeTanque,
        float $combustivelAtual
    ) {

        $this->placa = $placa;
        $this->modelo = $modelo;
        $this->capacidadeTanque = $capacidadeTanque;
        $this->combustivelAtual = $combustivelAtual;
    }

    public function getModelo(): string {
        return $this->modelo;
    }

    public function getCombustivelAtual(): float {
        return $this->combustivelAtual;
    }

    public function abastecer(float $litros): void {

        if(($this->combustivelAtual + $litros) > $this->capacidadeTanque) {

            echo "Tanque cheio!";
            return;
        }

        $this->combustivelAtual += $litros;

        echo "Abastecido com $litros litros.";
    }

    public function viajar(float $distancia): void {

        $gasto = $distancia / 10;

        if($gasto > $this->combustivelAtual) {

            echo "Combustível insuficiente.";
            return;
        }

        $this->combustivelAtual -= $gasto;

        echo "Viagem realizada.";
    }
}

?>