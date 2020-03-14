<?php

//INCLUDE ONCE SERVE PARA CHECAR SE ESSA CLASSE JA FOI INCLUSA ANTES
include_once "classAnimal.php";

    class Mamifero extends Animal {
        public $velocidade_max;
    }

    public function __construct($vel){
        $this->velocidade_max = $vel;
    }

    public function get_velocidade_max(){
        return ($this->velocidade_max);
    }
?>