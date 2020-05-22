<?php
    class Filme extends Comum{
        public $duracao;
        public $produtora;

        function __construct($parametros){
            $this->titulo = $parametros["titulo"];
            $this->sinopse = $parametros["sinopse"];
            $this->duracao = $parametros["duracao"];
            $this->produtora = $parametros["produtora"];
            $this->preco = $parametros["preco"];
        }
    }
?>