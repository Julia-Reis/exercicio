<?php
	class Receita{
        public $tipo_receita;
        public $nome_receita;
		public $modo_preparo;
		public $ingredientes;
		
		function __construct($parametros){
            $this->tipo_receita = $parametros["tipo_receita"];
			$this->nome_receita = $parametros["nome_receita"];
            $this->ingredientes = $parametros["ingredientes"];
            $this->modo_preparo = $parametros["modo_preparo"];
            $this->exibe();
        }

        function exibe(){
            echo"Tipo:  $this->tipo_receita <br>
            Nome da Receita: $this->nome_receita <br>
            Ingredientes: $this->ingredientes <br>
            Modo de Preparo: $this->modo_preparo";
        }
	}
?>