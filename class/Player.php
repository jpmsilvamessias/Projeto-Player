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
        $this->inventario=new Inventario(); 
        
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
            $this->nivel = "invalido"; 
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
            if ($objeto->getNome() ==$item->getNome()) { 
                unset($this->itens[$index]);
                return true; 
            }
        }
        return false; 
    }

    public function subirNivel(): void {
        $this->nivel=$this->$nivel+1;
        $aumento = $this->nivel * 3;
        $novaCapacidade = $this->inventario->getCapacidadeMaxima() + $aumento;
        $this->inventario->setCapacidadeMaxima($novaCapacidade);
    }

    public function getInventario(): Inventario {
        return $this->inventario;
    }

}