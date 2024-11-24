<?php

require_once('./class/Ataque.php');
require_once('./class/Defesa.php');
require_once('./class/Inventario.php');
require_once('./class/Item');
require_once('./class/Magia');
require_once('./class/Player');

$item1=new Ataque('Espada',7,'ataque');

$player1= new Player('detah of angel',1);
$player1->coletarItem($item1);
$player->adcionar($item);

