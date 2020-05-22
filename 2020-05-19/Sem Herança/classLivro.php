<?php
    class Livro{
        public $titulo;
        public $sinopse;
        public $qtd_paginas;
        public $editora;
        public $preco;

        function __construct($parametros){
            $this->titulo = $parametros["titulo"];
            $this->sinopse = $parametros["sinopse"];
            $this->qtd_paginas = $parametros["qtd_paginas"];
            $this->editora = $parametros["editora"];
            $this->preco = $parametros["preco"];
        }
    }
?>