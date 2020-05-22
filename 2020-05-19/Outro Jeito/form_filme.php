<?php
    include "cabecalho.php";
?>
<form action="recebe_filme.php" method="POST">
    Cadastro de Filme
    <fieldset>
        <input type="text" name="titulo" placeholder="Titulo"/><br>
        <br>
        <textarea name="sinopse" placeholder="Sinopse"></textarea><br>
        <br>
        <input type="time" name="duracao" step="1" placeholder="Duração"/><br>
        <br>
        <input type="text" name="produtora" placeholder="Produtora"/><br>
        <br>
        <input type="number" name="preco" step="0.01" placeholder="Preço"/><br>
        <br>
        <input class="botao" type="submit" value="Cadastrar" />
    </fieldset>
</form>
</body>
</html>