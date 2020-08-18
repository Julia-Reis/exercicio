<?php
    class Cadastro {
        public $nome;
        public $peso;
        public $data;
        public $cpf;

        public function __construct($valores){
            $this->nome = $valores["nome"];
            $this->peso = $valores["peso"];
            $this->data = $valores["data"];
            $this->cpf = $valores["cpf"];
        }

        public function exibe(){
            echo "Nome do animal: $this->nome";
            echo "Peso: $this->peso";
            echo "Data nasc: $this->data";
            echo "CPF: $this->cpf";
        }
    }

?>