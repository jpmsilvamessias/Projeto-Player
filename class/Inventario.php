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

}