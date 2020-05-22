<?php
    include "cabecalho.php";
?>
<form action="recebe_livro.php" method="POST">
    Cadastro de Livro
    <fieldset>
        <input type="text" name="titulo" placeholder="Titulo"/><br>
        <br>
        <textarea name="sinopse" placeholder="Sinopse"></textarea><br>
        <br>
        <input type="number" name="qtd_paginas" step="1" placeholder="Numero de paginas"/><br>
        <br>
        <input type="text" name="editora" placeholder="Editora"/><br>
        <br>
        <input type="number" name="preco" step="0.01" placeholder="Preço"/><br>
        <br>
        <input class="botao" type="submit" value="Cadastrar" />
    </fieldset>
</form>
</body>
</html>