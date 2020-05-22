<?php
    include "classComum.php";
    include "classFilme.php";
    include "cabecalho.php";
?>

<h3>Filmes cadastrados: </h3>

<?php
	foreach($_SESSION["filme"] as $b){
		echo"Titulo: $b->titulo<br />
        Sinopse: $b->sinopse <br />
        Duração: $b->duracao<br />
        Produtora: $b->produtora<br />
        Preço: $b->preco
		<hr />";
	}
	
?>