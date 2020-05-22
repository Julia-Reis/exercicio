<?php
    class Comum{
        public $titulo;
        public $sinopse;
        public $preco;

        function __construct($parametros){
            $this->titulo = $parametros["titulo"];
            $this->sinopse = $parametros["sinopse"];
            $this->preco = $parametros["preco"];
        }
    }

?>