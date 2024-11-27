<?php

require_once('Item.php');
require_once('Inventario.php');

class Player {
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;

    public function __construct($nickname) {
        $this->setNickname($nickname);
        $this->nivel=1;
        $this->inventario = new Inventario(); 
        
    }

    public function getInventario(): Inventario {
        return $this->inventario;
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
    public function coletarItem(Item $item): bool {
        foreach ($this->inventario->listar() as $itemInventario) {
            if ($itemInventario->getNome() == $item->getNome()) {
                return true;
            } else {
                return false;
           } 
        }
    }
    
    

    public function soltarItem(Item $item): bool {
        foreach ($this->itens as $index => $objeto) {
            if ($objeto->getNome() == $item->getNome()) { 
                unset($this->itens[$index]);
                return true; 
            } else{
                return false; 
            }
        }
    }

    public function subirNivel(): void {
        $this->nivel++;
        $this-> inventario->aumentarCapacidade($this->nivel*3);
    }

    public function getNivel(): int{
        return $this->nivel;
    }

    public function esvaziarInventario(): string{
        $this->inventario->esvaziar();
       return "Inventario vazio";
    }

}

