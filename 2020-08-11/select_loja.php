<?php
	include "menu.php";
	include "conexao.php";

	$select = "SELECT * FROM loja";
		
	$resultado = $conexao->query($select);
	
	foreach($resultado as $linha){
		echo "Razão Social: ".$linha["razao_social"]."<br />";
		echo "Nome Fantasia: ".$linha["nome_fantasia"]. "<br />";
		echo "Email ".$linha["email"]."<br /><hr />";
	}
?>

