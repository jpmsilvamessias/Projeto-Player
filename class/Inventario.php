<?php

require_once('Item.php');

class Inventario{
    private int $capacidadeMaxima;
    private array $itens;

    public function  __construct(){
        $this->setCapacidadeMaxima($capacmax);
        $this->itens=[];
    }
}