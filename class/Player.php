<?php

require_once('Item.php');
require_once('Inventario.php');

class Player {
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;
    

    public function __construct($nickname, $nivel) {
        $this->setNickname($nickname);
        $this->setNivel($nivel);
        $this->itens = []; 
    }

    public function getNickname(): string {
        return $this->nickname; 
    }

    public function setNickname(string $nickname): void {
        if (empty($nickname)) {
            $this->nickname = "Invalido"; 
        } else {
            $this->nickname = $nickname;
        }
    }

    public function getNivel(): int {
        return $this->nivel;
    }

    public function setNivel(int $nivel): void {
        if ($nivel <= 0) {
            $this->nivel = 1; 
        } else {
            $this->nivel = $nivel;
        }
    }

    public function coletarItem(Item $item): bool {
        if (empty($item)) {
            return false;
        } else {
            $this->itens[] = $item; 
            return true;
        }
    }

    public function soltarItem(Item $item): bool {
        foreach ($this->itens as $index => $objeto) {
            if ($objeto->getNome() === $item->getNome()) { 
                unset($this->itens[$index]);
                return true; 
            }
        }
        return false; 
    }

    public function subirNivel(): bool {
        $this->nivel++;
        return true; 
    }
}
