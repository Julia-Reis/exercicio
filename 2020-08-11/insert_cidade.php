<?php
	include "menu.php";
	include "conexao.php";
	
	$nome_cidade = $_POST["nome_cidade"];
	$insert = "INSERT INTO cidade(nome_cidade, cod_estado) VALUES (:n,:c)";
	$stmt = $conexao->prepare($insert);
	
	$stmt->bindValue(":n", $_POST["nome_cidade"]);
	$stmt->bindValue(":c", $_POST["cod_estado"]);
	
	$stmt->execute();
	
	echo "Cidade inserida no Banco de Dados. <a href='form_cidade.php'>Voltar...</a>";
?>