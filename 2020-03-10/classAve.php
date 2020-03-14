<?php

//INCLUDE ONCE SERVE PARA CHECAR SE ESSA CLASSE JA FOI INCLUSA ANTES
include_once "classAnimal.php";

    class Ave extends Animal {
        public $altura_max;

        public function get_altura_max(){
            return ($this->altura_max);
        }
    }


?>