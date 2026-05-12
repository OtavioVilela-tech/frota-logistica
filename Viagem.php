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

        echo "<h3>Dados do Motorista</h3>";

        echo "Nome: " . $this->motorista->getNome() . "<br>";
        echo "CPF: " . $this->motorista->getCpf() . "<br>";
        echo "CNH: " . $this->motorista->getCnh() . "<br>";

        if($this->motorista->getValidadeCnh() < 2024) {

            echo "<br>Motorista NÃO pode dirigir.<br>";
            echo "CNH vencida.<br>";

            return;
        }

        echo "<br>Motorista autorizado a dirigir.<br>";

        echo "Veículo utilizado: " . $this->veiculo->getModelo() . "<br><br>";

        $this->veiculo->viajar($this->distancia);
    }

    public function relatorio(): void {

        echo "<hr>";

        echo "Destino: " . $this->destino . "<br>";

        echo "Motorista: " . $this->motorista->getNome() . "<br>";

        echo "Veículo: " . $this->veiculo->getModelo() . "<br>";

        echo "Combustível restante: ";
        echo $this->veiculo->getCombustivelAtual() . " litros<br>";

        echo "<hr>";
    }
}

?>