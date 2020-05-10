<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="recebe_receita.php" method="POST">
        <fieldset>
            <legend> Cadastro de Receitas </legend>
                <select name="tipo_receita">
                    <option>Slecione o tipo </option>
                    <option> Torta </option>
                    <option> Bolo </option> 
                    <option> Pão </option>
                </select>
            <br>
            <br>
            <input type="text" name="nome_receita" placeholder="Nome da receita..." />
            <br>
            <br>
            <textarea name="ingredientes" placeholder="Ingredientes..."></textarea>
            <br>
            <br>
            <textarea name="modo_preparo" placeholder="Modo de preapro..."></textarea>
            <br>
            <br>
            <input type="submit" value="Cadastrar" />
        </fieldset>
    </form>
</body>
</html>