<?php
	include "ClassCamiseta.php";
	include "cabecalho.php";
?>

<h3>Objetos Camiseta instanciados no sistema: </h3>

<?php
	foreach($_SESSION["camiseta"] as $c){
		echo"Cor: <span style='color:$c->cor'> $c->cor</span><br />
		Gola: $c->gola <br />
		Tamnho: $c->tamanho
		<hr />";
	}
	
?>