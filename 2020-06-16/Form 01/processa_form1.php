<?php
    include "cabecalho.php";
    include "classeCadastro.php";
    $c = new Cadastro($_POST);

    session_start();

    $_SESSION["cadastro"][] = $c;

    echo "<h2>Cadastrado com Sucesso!</h2>";
?>