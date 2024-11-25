<?php

require_once('./class/Item.php');
require_once('./class/Ataque.php');
require_once('./class/Defesa.php');
require_once('./class/Magia.php');
require_once('./class/Inventario.php');
require_once('./class/Player.php');

$player = new Player("Jogador1", 1);

// Nível inicial e capacidade inicial
echo "Nível: " . $player->getNivel() . "\n"; // Nível: 1
echo "Capacidade: " . $player->getInventario()->getCapacidadeMaxima() . "\n"; // Capacidade: 20

// Subindo para nível 2
$player->subirNivel();
echo "Nível: " . $player->getNivel() . "\n"; // Nível: 2
echo "Capacidade: " . $player->getInventario()->getCapacidadeMaxima() . "\n"; 

// Subindo para nível 3
$player->subirNivel();
echo "Nível: " . $player->getNivel() . "\n"; // Nível: 3
echo "Capacidade: " . $player->getInventario()->getCapacidadeMaxima() . "\n";












