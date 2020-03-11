<?php
    include "classAnimal.php";
    include "classAve.php";
    include "cabecalho.php";


        $c = new Ave(
            $_POST["peso"],
            $_POST["comprimento"],
            $_POST["altura"],
            $_POST["cor"],
            $_POST["nome"],
            $_POST["altura_max"]
        );
        $_SESSION["animais"][]= $c;
?>

<h3>Animal Cadastrado com Sucesso.</h3>
</body>
</html>