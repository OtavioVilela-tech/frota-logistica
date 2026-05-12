<?php

class Motorista {

    private string $nome;
    private string $cpf;
    private string $cnh;
    private int $validadeCnh;

    public function __construct(
        string $nome,
        string $cpf,
        string $cnh,
        int $validadeCnh
    ) {

        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cnh = $cnh;
        $this->validadeCnh = $validadeCnh;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getValidadeCnh(): int {
        return $this->validadeCnh;
    }
}

?>