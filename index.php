<?php

require_once('./class/Item.php');
require_once('./class/Ataque.php');
require_once('./class/Defesa.php');
require_once('./class/Magia.php');
require_once('./class/Inventario.php');
require_once('./class/Player.php');


$player1= new Player("darlk",1);

$item1= new Ataque('Espada',7,'ataque');

$player1->getInventario()->adicionar($item1);

echo "inventario atual do jogador {$player1->getNickname()}<br>";
echo "capacidade maxima atual{$player1->getInventario()->getCapacidadeMaxima()}<br>";
echo "capacidade livre atual{$player1->getInventario()->capacidadeLivre()}<br>";
echo "itens no inventario<br>";
foreach ($player1->getInventario()->getItens() as $item) {
    echo " Nome {$item->getNome()}  Tamanho: {$item->getTamanho()}<br>";
}

$player1->subirNivel();
echo "jogador {$player1->getNickName()}, subiu de nivel para {$player1->getNivel()}<br>";

echo "Nova capacidade Maxima{$player1->getInventario()->getCapacidadeMaxima()}<br>";

$player2= new Player("link",2);
$item2= new Ataque('Master sword',7,'ataque');
$item3= new magia('Cajado' ,2 ,'magia');
$item4= new Defesa('Escudo',4,'Defesa');













