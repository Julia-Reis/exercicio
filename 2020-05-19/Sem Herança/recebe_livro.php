<?php
    session_start();

    require_once "classLivro.php";

    echo "
    <a href='form_livro.php'>Cadastrar Livro |</a>
    <a href='form_filme.php'>Cadastrar Filme |</a>
    <a href='listar_livros.php'> Lista de Livros |</a>
    <a href='listar_filmes.php'> Lista de Filmes </a>
    <hr />";

    $a = new Livro ($_POST);

    $_SESSION["livro"][] = $a;

    echo "Cadastrado foi, tem que ver se vai listar...<br />";
  
?>