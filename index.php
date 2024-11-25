<?php

require_once('./class/Item.php');
require_once('./class/Ataque.php');
require_once('./class/Defesa.php');
require_once('./class/Magia.php');
require_once('./class/Inventario.php');
require_once('./class/Player.php');


// Criar os itens (dois itens de cada categoria, como exemplo)
$item1 = new Item("Espada", 5,"ataque");  // Nome e tamanho
$item2 = new Item("Escudo", 3,"defesa");

$item3 = new Item("Poção", 2,"Magia");
$item4 = new Item("Elixir", 1,"magia");

$item5 = new Item("Armadura", 6,"ataquee");
$item6 = new Item("Botas", 4,"babuino");

// Criar jogadores (dois jogadores com diferentes níveis)
$player1 = new Player("Jogador1", 1);
$player2 = new Player("Jogador2", 2);

// Adicionar itens aos inventários dos jogadores (simulando o inventário cheio)
$player1->getInventario()->adicionar($item1);
$player1->getInventario()->adicionar($item2);
$player1->getInventario()->adicionar($item3);
$player1->getInventario()->adicionar($item4);
$player1->getInventario()->adicionar($item5);
$player1->getInventario()->adicionar($item6);

// Exibir as informações do inventário do player1
echo "Inventário do " . $player1->getNickname() . " antes de subir de nível:\n";
echo "Capacidade máxima: " . $player1->getInventario()->getCapacidadeMaxima() . "\n";
echo "Itens no inventário:\n";
foreach ($player1->getInventario()->getItens() as $item) {
    echo "- " . $item->getNome() . " (Tamanho: " . $item->getTamanho() . ")\n";
}

// Mostrar a capacidade livre do inventário do player1
echo "Capacidade livre antes de subir de nível: " . $player1->getInventario()->capacidadeLivre() . "\n\n";

// Simular o aumento de nível do Player1
echo "Subindo o nível do jogador...\n";
$player1->subirNivel();

// Exibir as informações do inventário do player1 após subir de nível
echo "Inventário do " . $player1->getNickname() . " após subir de nível:\n";
echo "Capacidade máxima: " . $player1->getInventario()->getCapacidadeMaxima() . "\n";
echo "Itens no inventário:\n";
foreach ($player1->getInventario()->getItens() as $item) {
    echo "- " . $item->getNome() . " (Tamanho: " . $item->getTamanho() . ")\n";
}

// Mostrar a capacidade livre do inventário do player1 após o nível
echo "Capacidade livre após subir de nível: " . $player1->getInventario()->capacidadeLivre() . "\n\n";

// Exibir o estado do player2 para verificar seu inventário
echo "Inventário do " . $player2->getNickname() . ":\n";
echo "Capacidade máxima: " . $player2->getInventario()->getCapacidadeMaxima() . "\n";
echo "Itens no inventário:\n";
foreach ($player2->getInventario()->getItens() as $item) {
    echo "- " . $item->getNome() . " (Tamanho: " . $item->getTamanho() . ")\n";
}

?>













