<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
<form action="recebe_form_receita.php" method="POST">
<fieldset>
    <legend>Cadastro de Receitas</legend>
        <?php
            include "classSelect.php";

            $atributo["name"] = "tipo_receita";
            $atributo["placeholder"] = "Tipo de Receita...";

            $a1 =  new Select($atributo);
        ?> <br>

        <?php
            include "classInput.php";

            $atributo["type"] = "text";
            $atributo["name"] = "nome_receita";
            $atributo["placeholder"] = "Nome da receita...";

            $a2 =  new Input($atributo);
        ?>

        <br>

        <?php
            include "classTextarea.php";

            $atributo["name"] = "ingredientes";
            $atributo["placeholder"] = "Ingredientes...";

            $a3 =  new Textarea($atributo);
        ?>

        <br>

        <?php
            include "classTextarea2.php";

            $atributo["name"] = "modo_preparo";
            $atributo["placeholder"] = "Modo de preparo...";

            $a4 =  new Textarea2($atributo);
        ?>

        <br>
        <input type="submit" value="Enviar" />
</fieldset>
</form>
</body>
</html>