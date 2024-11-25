<?php

require_once('./class/Item.php');
require_once('./class/Ataque.php');
require_once('./class/Defesa.php');
require_once('./class/Magia.php');
require_once('./class/Inventario.php');
require_once('./class/Player.php');



$item1 = new Ataque("Espada Longa", 5, "Ataque");
$item2 = new Defesa("Escudo Grande", 8, "Defesa");
$item3 = new Magia("Bola de Fogo", 3, "Magia");


$inventario = new Inventario();


$inventario->adicionar($item1);
$inventario->adicionar($item2);
$inventario->adicionar($item3);


$player = new Player("Jogador1", 10);

$player->coletarItem($item1);
$player->coletarItem($item2);
$player->coletarItem($item3);

echo "Nickname: " . $player->getNickname();
echo "Nível: " . $player->getNivel();


echo "Capacidade Livre no Inventário: " . $inventario->capacidadeLivre();


$player->soltarItem($item2);

echo "Após soltar o item, Capacidade Livre: " . $inventario->capacidadeLivre();
?>


