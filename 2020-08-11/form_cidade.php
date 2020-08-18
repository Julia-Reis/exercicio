<?php
	include "menu.php";
	include "conexao.php";

	//TEM QUE CONSULTAR O BANCO DE DADOS PRIMEIRO
	$select = "SELECT * FROM ESTADO ORDER BY sigla";
	// A VARIAVEL STMT VAI SER DO TIPO PDOStatement
	$stmt = $conexao->prepare($select);
	$stmt->execute();
?>

<form action="insert_cidade.php" name="f" method="POST">
	<input type="text" name="nome_cidade" placeholder="Nome" />
	<select name="cod_estado">
	<option>Selecione um Estado</option>
	<?php
		while($linha=$stmt->fetch()){
			$cod_estado = $linha["id_estado"];
			$sigla = $linha["sigla"];
			echo "<option value='$cod_estado'>$sigla</option> ";
		}
	?>
	</select>
	<button>Enviar</button>
</form>
</body>
</html>