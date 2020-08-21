<?php
	
	include "classeTime.php";
	
	class Jogador{
		private $nome;
		private $num_camisa;
		private $idade;
		private $posicao;
		private $nacionalidade;
		private $nome_times;
		
		public function __construct($n, $nc, $i, $p, $nt, Times $t {
			$this->nome = $n;
			$this->num_camisa = $nc;
			$this->idade = $i;
			$this->posicao = $p;
			$this->nacionalidade = $nt;
			$this->nome_times = $t;
		}
		
		public function exibe_jogador(){
			echo "Jogador: 
				  $this->nome.
				  $this->num_camisa.
				  $this->idade.
				  $this->posicao.
				  $this->nacionalidade.";
				  $this->exibe_times();
			
		}
	}
	
?>
