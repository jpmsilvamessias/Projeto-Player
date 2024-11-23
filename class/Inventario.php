<?php

require_once('Item.php');

class Inventario{
    private int $capacidadeMaxima;
    private array $itens;

    public function  __construct(){
        $this->capacidadeMaxima=20;
        $this->itens=[];
    }
    public function adcionarItem(Item $item): bool{
        if(empty($item)){
            return false;
        } else{
            $this->itens[]=$item;
            return true;

        }
    }

    public function removerItem($item): void{
        foreach($this->itens as $index=> $item ){
            if($item->getNome()===$item){
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