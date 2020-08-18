<?php

	include "conexao.php";
	
	$razao_social = $_POST["razao_social"];
	$nome_fantasia = $_POST["nome_fantasia"];
	$email = $_POST["email"];
	$insert = "INSERT INTO loja(razao_social,nome_fantasia,email) VALUES ('$razao_social','$nome_fantasia','$email')";
	$conexao->query($insert);
	
	echo "Loja inserida  no Banco de Dados. <a href='form_estado.php'>Voltar...</a>";
	
?>