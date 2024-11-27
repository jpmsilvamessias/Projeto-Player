<?php

require_once('./class/Item.php');
require_once('./class/Ataque.php');
require_once('./class/Defesa.php');
require_once('./class/Magia.php');
require_once('./class/Inventario.php');
require_once('./class/Player.php');


$player1= new Player("darlk");

$item1= new Ataque('Espada');

$player1->getInventario()->adicionar($item1);

echo "inventario atual do jogador {$player1->getNickname()}<br>";
echo "capacidade maxima atual{$player1->getInventario()->getCapacidadeMaxima()}<br>";
echo "capacidade livre atual{$player1->getInventario()->capacidadeLivre()}<br>";
echo "itens no inventario<br>";

foreach ($player1->getInventario()->listar() as $item) {
    echo " Nome {$item->getNome()}  Tamanho: {$item->getTamanho()}<br>";
}

$player1->subirNivel();
echo "jogador {$player1->getNickName()}, subiu de nivel para {$player1->getNivel()}<br>";

echo "Nova capacidade Maxima{$player1->getInventario()->getCapacidadeMaxima()}<br>";

echo'<br>';

$player2= new Player("link");
$item2= new Ataque('Master sword');
$item3= new Magia('Cajado');
$item4= new Defesa('Escudo',);
$item5= new Ataque('Machado');
$item6= new Magia('Bola de fogo');

echo "<br>";

$item7= new Ataque('Espada gigante');
$item8= new Magia ('Oraculo');

$player2->getInventario()->adicionar($item2);
$player2->getInventario()->adicionar($item3);
$player2->getInventario()->adicionar($item4);
$player2->getInventario()->adicionar($item5);
$player2->getInventario()->adicionar($item6);
$player2->getInventario()->adicionar($item7);
$player2->getInventario()->adicionar($item8);
 
echo "Inventario atual do jogador {$player2->getNickname()}<br>";
echo "Capacidade maxima atual{$player2->getInventario()->getCapacidadeMaxima()}<br>";
echo "Capacidade livre atual {$player2->getInventario()->capacidadeLivre()}<br>";
echo "Itens no inventario<br>";

foreach ($player2->getInventario()->listar() as $item) {
    echo " Nome {$item->getNome()}  Tamanho: {$item->getTamanho()}<br>";
}

$player2->esvaziarInventario();

if (empty($player2->getInventario()->listar())) {
    echo "O inventário está vazio.";
}
