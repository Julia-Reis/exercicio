<?php

//INCLUDE ONCE SERVE PARA CHECAR SE ESSA CLASSE JA FOI INCLUSA ANTES
include_once "classAnimal.php";

    class Peixe extends Animal {
        public $temperatura_med;
    }

    public function get_temperatura_med(){
        return ($this->temperatura_med);
    }
?>                                       