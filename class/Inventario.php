<?php

require_once('Item.php');

class Inventario{
    private int $capacidadeMaxima;
    private array $itens;

    public function  __construct(){
        $this->setCapacidadeMaxima($capacidadeMaxima);
        $this->itens=[];
    }

    public function getCapacidadeMaxima(): int{
        return $this -> capacidadeMax;
    }

    public function setCapacidadeMaxima(int $capacidadeMaxima): void {
        if($capacidadeMaxima <= 0 ){
            $this -> capacidadeMax =  "Invalido";
        } else {
            $this-> capaciadeMax = $capacidadeMaxima;
        }
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
            if($item->getNome()===$nome){
                unset($this->itens[$index]);
                break;
            }
        }
        
    }

}