<?php
    class Receita{
        public $tipo_receita;
        public $nome_receita;
        public $ingredientes;
        public $modo_preparo;

        function __construct($parametros){
            $this->tipo_receita = $parametros["tipo_receita"];
            $this->nome_receita = $parametros["nome_receita"];
            $this->ingredientes = $parametros["ingredientes"];
            $this->modo_preparo = $parametros["modo_preparo"];
        }
    }
?>