<?php

class Motorista
{
    private $nome;
    private $cpf;
    private $cnh;
    private $validadeCnh;

    public function __construct($nome, $cpf, $cnh, $validadeCnh) 
    {
        $this->setNome($nome);
        $this->cpf = $cpf;
        $this->cnh = $cnh;
        $this->validadeCnh = $validadeCnh;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getValidadeCnh() {
        return $this->validadeCnh;
    }

    
    public function setNome($nome) {

        if(empty($nome)) {
            echo "Nome inválido!<br>";
        } else {
            $this->nome = $nome;
        }
    }
}
?>
