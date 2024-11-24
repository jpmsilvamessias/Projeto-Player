<?php

require_once('./class/Ataque.php');
require_once('./class/Defesa.php');
require_once('./class/Inventario.php');
require_once('./class/Item.php');
require_once('./class/Magia.php');
require_once('./class/Player.php');

// Criando itens
$item1 = new Ataque("Espada Longa", 5, "Ataque");
$item2 = new Defesa("Escudo Grande", 8, "Defesa");
$item3 = new Magia("Bola de Fogo", 3, "Magia");

// Criando um inventário
$inventario = new Inventario();

// Adicionando itens no inventário
$inventario->adicionar($item1);
$inventario->adicionar($item2);
$inventario->adicionar($item3);

// Criando um player
$player = new Player("Jogador1", 10);

// Player coletando itens
$player->coletarItem($item1);
$player->coletarItem($item2);
$player->coletarItem($item3);

// Exibindo informações do player
echo "Nickname: " . $player->getNickname();
echo "Nível: " . $player->getNivel();

// Exibindo a capacidade restante do inventário
echo "Capacidade Livre no Inventário: " . $inventario->capacidadeLivre();

// Player soltando um item
$player->soltarItem($item2);

// Exibindo informações após soltar o item
echo "Após soltar o item, Capacidade Livre: " . $inventario->capacidadeLivre();
?>


