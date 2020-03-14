<?php
    include "classAnimal.php";
    include "classAve.php";
    include "cabecalho.php";

    $tipo = $_POST["tipo"];
    if($tipo == "ave") {
        $c = new Ave(
            $_POST["peso"],
            $_POST["comprimento"],
            $_POST["altura"],
            $_POST["cor"],
            $_POST["nome"],
            $_POST["altura_max"]
        );
        $_SESSION["animais"][]= $c;
    }

    if($tipo == "reptil") {
        $c = new Reptil(
            $_POST["peso"],
            $_POST["comprimento"],
            $_POST["altura"],
            $_POST["cor"],
            $_POST["nome"],
            $_POST["tempo_max"]
        );
        $_SESSION["animais"][]= $c;
    }

    if($tipo == "anfibio") {
        $c = new Anfibio(
            $_POST["peso"],
            $_POST["comprimento"],
            $_POST["altura"],
            $_POST["cor"],
            $_POST["nome"],
            $_POST["tempo_max"]
        );
        $_SESSION["animais"][]= $c;
    }

    if($tipo == "mamifero") {
        $c = new Mamifero(
            $_POST["peso"],
            $_POST["comprimento"],
            $_POST["altura"],
            $_POST["cor"],
            $_POST["nome"],
            $_POST["velocidade_max"]
        );
        $_SESSION["animais"][]= $c;
    }

    if($tipo == "peixe") {
        $c = new Peixe(
            $_POST["peso"],
            $_POST["comprimento"],
            $_POST["altura"],
            $_POST["cor"],
            $_POST["nome"],
            $_POST["temperatura_med"]
        );
        $_SESSION["animais"][]= $c;
    }
?>

<h3>Animal Cadastrado com Sucesso.</h3>
</body>
</html>