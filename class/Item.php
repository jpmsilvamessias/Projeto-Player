<?php

class Item {
    private string $nome;
    private int $tamanho;
    private string $classe;

    public function __construct($nome, $tamanho, $classe) {
        $this->setNome($nome);
        $this->setTamanho($tamanho);
        $this->setClasse($classe);
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome): void {
        if (empty($nome)) {
            $this->nome = "Invalido";
        } else {
            $this->nome = $nome;
        }
    }

    public function getTamanho(): int {
        return $this->tamanho;
    }

    public function setTamanho(int $tamanho): void {
        if ($tamanho <= 0) {
            $this->tamanho = "invalido"; 
        } else {
            $this->tamanho = $tamanho;
        }
    }

    public function getClasse(): string {
        return $this->classe;
    }

    public function setClasse(string $classe): void {
        if (empty($classe)) {
            $this->classe = "Invalido";
        } else {
            $this->classe = $classe;
        }
    }
}


