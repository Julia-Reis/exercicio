<?php
    class Filme{
        public $titilo;
        public $sinopse;
        public $duracao;
        public $produtora;
        public $preco;

        function __construct($parametros){
            $this->titulo = $parametros["titulo"];
            $this->sinopse = $parametros["sinopse"];
            $this->duracao = $parametros["duracao"];
            $this->produtora = $parametros["produtora"];
            $this->preco = $parametros["preco"];
        }
    }
?>