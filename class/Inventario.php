<?php

require_once('Item.php');
require_once('Player.php');


class Inventario{
    private int $capacidadeMaxima;
    private array $itens;

    public function  __construct(){
        $this->capacidadeMaxima=20;
        $this->itens=[];
    }
    public function adcionar(Item $item): bool{
        if(empty($item)){
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

    public function capacidadeLivre(): bool{
        foreach($this->capacidademaxima as $index=>$item){
            $this->capacidademaxima -=$item->getTamanho();
            
        }

    }

}