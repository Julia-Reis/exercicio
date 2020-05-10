<?php
    session_start();
	
	include "classReceita.php";
	
	$a = new Receita($_POST);
	
	$_SESSION["receita"][] = $a;
?>