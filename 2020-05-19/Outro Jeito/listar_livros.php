<?php
    include "classComum.php";
    include "classLivro.php";
    include "cabecalho.php";
?>

<h3>Livros cadastrados: </h3>

<?php
	foreach($_SESSION["livro"] as $c){
		echo"Titulo: $c->titulo<br />
        Sinopse: $c->sinopse <br />
        N° de Páginas: $c->qtd_paginas<br />
        Editora: $c->editora<br />
        Preço: $c->preco
		<hr />";
	}
	
?>