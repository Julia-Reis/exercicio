<?php

    $sgbd = "mysql";
    $local = "localhost:8080";
    $nome_bd = "lanchonete";
    $usuario = "root";
    $senha = "usbw";

    $conexao = new PDO("$sgbd:host=$local;dbname=$nome_bd",$usuario,$senha);

?>
