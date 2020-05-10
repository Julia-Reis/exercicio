<?php
    session_start();

    include "classReceita.php";

    $a = new Receita($_POST);
	
    $_SESSION["receita"][] = $a;
    
    echo "<h2>Receita cadastrada com sucesso!</h2>";
?>