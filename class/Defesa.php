<?php

require_once('Item.php');

class Defesa extends Item{
    
    public function __construct(string $nome, int $tamanho, string $classe){
        parents::__construct($nome, $tamanho, $classe);
    }
}