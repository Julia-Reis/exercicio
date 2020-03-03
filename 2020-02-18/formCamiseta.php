<?php
	include "cabecalho.php";
?>

	<h1> Criar Camiseta</h1>
	<form action="instanciarCamiseta.php" method="post">
		Cor da Camiseta
		<input type="color" name="cor" />
		<br />
		
		Gola:
		<input type="text" name="gola" placeholder="V OU U" />
		<br />
		
		Tamnho:
		<input type="text" name="tamanho" placeholder="P, M, G, GG" />
		<br />
		
		<input type="submit" value="Criar" />
	</form>
</body>
</html>
