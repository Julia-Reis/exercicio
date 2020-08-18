<?php
	include "menu.php";
	include "conexao.php";
?>

<form action="insert_loja.php" method="POST">
	<input type="text" name="razao_social" placeholder="Razão social:" />
	<br>
	<input type="text" name="nome_fantasia" placeholder="Nome fantasia:" />
	<br>
	<input type="email" name="email" placeholder="email" />
	<br>
	<button>Enviar</button>
</form>
</body>
</html>