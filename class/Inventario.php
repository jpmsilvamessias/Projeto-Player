<?php

require_once('Item.php');

class Inventario {
    private int $capacidadeMaxima; 
    private array $itens;

    public function __construct() {
        $this->capacidadeMaxima = 20; 
        $this->itens = [];
    }

    public function getCapacidadeMaxima(): int {
        return $this->capacidadeMaxima;
    }

    public function setCapacidadeMaxima(int $capacidadeMaxima): void {
        $this->capacidadeMaxima = $capacidadeMaxima;
    }


    public function adicionar(Item $item): bool{
        if($item->getTamanho()> $this->capacidadeLivre()){
            return false;
        } else{
            $this->itens[]=$item;
            return true;

        }
    }

    public function remover($item): void{
        foreach($this->itens as $index=> $item ){
            if($item->getNome()==$item){
                unset($this->itens[$index]);
                break;
            }
        }
        
    }

        public function capacidadeLivre(): int {
            $ocupado = 0;
            foreach ($this->itens as $item) {
                $ocupado += $item->getTamanho(); 
            }     
            return $this->capacidadeMaxima - $ocupado;
        }

        public function getItens(): array {
            return $this->itens;
        }

        public function esvaziar():void{
            $this->itens=[];
    
        }
    

}