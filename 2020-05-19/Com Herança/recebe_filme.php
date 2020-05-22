<?php
    session_start();
    
    include "classComum.php";
    include "classFilme.php";

    echo "
    <a href='form_livro.php'>Cadastrar Livro |</a>
    <a href='form_filme.php'>Cadastrar Filme |</a>
    <a href='listar_livros.php'> Lista de Livros |</a>
    <a href='listar_filmes.php'> Lista de Filmes </a>
    <hr />";

    $a = new Filme ($_POST);

    $_SESSION["filme"][] = $a;

    echo "Cadastrado foi, tem que ver se vai listar...<br />";
  
?>