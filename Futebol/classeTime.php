<?php
	include "classeJogador.php";

	class Times {
		private $nome;
		private $jogadores;
		private $vitorias;
		private $derrotas;
		private $empates;
		
		public function __construct($n, Jogador $j, $v, $d, $e){
			$this->nome = $n;
			$this->jogadores = $j;
			$this->vitorias = $v;
			$this->derrotas = $d;
			$this->empates = $e;
		}
		
		public function exibe_times(){
			echo "Times: 
				  $this->nome.";
				  $this->exibe_jogadores().;
			echo "$this->vitorias.
				  $this->derrotas.
				  $this->empates";
			
		}
	}
?>
