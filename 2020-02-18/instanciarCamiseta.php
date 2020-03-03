<?php
	include "ClassCamiseta.php";
	include "cabecalho.php";
	
	$c = new Camiseta();
	
	$c->cor = $_POST["cor"];
	$c->gola = $_POST["gola"];
	$c->tamanho = $_POST["tamanho"];
	
		$_SESSION["camiseta"][] = $c;
?>

<h3>Camiseta inserida com Sucesso.</h3>

</body>
</html>