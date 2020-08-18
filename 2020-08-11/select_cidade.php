<?php
	include "menu.php";
	include "conexao.php";
	
	$select = "SELECT * FROM cidade as c INNER JOIN estado as e ON c.cod_estado=e.id_estado";
	
	$stmt = $conexao->prepare($select);
	
	$stmt->execute();

	while($linha = $stmt->fetch()){
		echo "Nome cidade: ".$linha["nome_cidade"]."<br />";
		echo "Sigla Estado: ".$linha["sigla"]. "<br /><hr />";
	}
?>