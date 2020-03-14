<?php
//ESSA É A SUPERCLASSE!!
    class Animal{
        public $peso;
        public $comprimento;
        public $altura;
        public $cor;
        public $nome;

        public function __construct($p, $com, $a, $c, $n){
            $this->peso = $p;
            $this->comprimento = $com;
            $this->altura = $a;
            $this->cor = $c;
            $this->nome = $n;
        }
        public function get_peso(){
            return ($this->peso);
        }

        public function get_comprimento(){
            return ($this->comprimento);
        }

        public function get_altura(){
            return ($this->altura);
        }

        public function get_cor(){
            return ($this->cor);
        }

        public function get_nome(){
            return ($this->nome);
        }

    }

?>