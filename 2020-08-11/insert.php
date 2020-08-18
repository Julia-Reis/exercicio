<?php

	include "conexao.php";
	
	$nome = $_POST["nome_estado"];
	$sigla = $_POST["sigla"];
	$insert = "INSERT INTO estado(nome_estado,sigla) VALUES ('$nome','$sigla')";
	$conexao->query($insert);
	
	echo "Estado Inserido no Banco de Dados. <a href='form_estado.php'>Voltar...</a>";
	
?>