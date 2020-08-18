<?php
    class Cadastro {
        public $nome;
        public $email;
        public $idade;
        public $telefone;
        public $endereco;

        public function __construct($valores){
            $this->nome = $valores["nome"];
            $this->email = $valores["email"];
            $this->idade = $valores["idade"];
            $this->telefone = $valores["telefone"];
            $this->endereco = $valores["endereco"];
        }

        public function exibe(){
            echo "Nome: $this->nome";
            echo "Email: $this->email";
            echo "Idade: $this->idade";
            echo "Telefone: $this->telefone";
            echo "Endereço: $this->endereco";
        }
    }

?>