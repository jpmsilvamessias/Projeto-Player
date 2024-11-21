<?php

require_once('Item.php');
require_once('Inventario.php');

class Player {

    private string $nickname;
    private int $nivel;
    private Inventario $inventario;

    public function __construct(){
        $this->setNickname($nickname);
        $this->setNivel($nivel);
    }


    public function getNickname(): string{
        return $this-> nickName;
    }

    public function setNickname(string $nickname): void{
        if(empty($nickName)){
            $this-> nickName = "Invalido";
        } else {
            $this-> nickName = $nickName;
        }
    }

    public function getNivel(): int {
        return $this-> nivel;
    }

    public function setNivel(int $nivel): void{
        if($nivel <=0){
            $this -> nivel = "Invalido";
        } else {
            $this -> nivel = $nivel;
        }
    }
    
}