<?php

require_once('Item.php');

class Inventario {
    private int $capacidadeMaxima;
    private array $itens;

    public function __construct() {
        $this->capacidadeMaxima = 20; 
        $this->itens = [];
    }

    public function adicionar(Item $item): bool {
        if (empty($item)) {
            return false;
        } else {
            $this->itens[] = $item;
            return true;
        }
    }

    public function remover($item): void {
        foreach ($this->itens as $index => $objeto) {
            if ($objeto->getNome() === $item->getNome()) { 
                unset($this->itens[$index]);
                break;
            }
        }
    }

    public function capacidadeLivre(): int {
        $usado = 0;
        foreach ($this->itens as $item) {
            $usado += $item->getTamanho(); 
        }
        return $this->capacidadeMaxima - $usado;
    }
}
