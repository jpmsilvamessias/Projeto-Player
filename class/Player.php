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
        $this->inventario = new Inventario(); 
        $this->inventario->setCapacidadeMaxima(20 + ($nivel * 3));  
    }
 
public function getNivel(): int{
        return $this->nivel;
    }

public function setNivel( int $nivel): void{
        if($nivel >1){
            $this->nivel="invalido so pode ser nivel1 ";
        } else{
            $this->nivel=$nivel;
        }
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
        $this->nivel = $this->nivel + 1;
        $aumento = $this->nivel * 3;
        $novaCapacidade = $this->inventario->getCapacidadeMaxima() + $aumento;
        $this->inventario->setCapacidadeMaxima($novaCapacidade);  
    }

    public function esvaziarInventario(): string{
        $this->inventario->esvaziar();
       return "Inventario vazio";
    }

}
