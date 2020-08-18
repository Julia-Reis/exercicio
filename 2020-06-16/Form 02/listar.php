<?php
    include "classeCadastro.php";
    include "cabecalho.php";

    session_start();

    if(!empty($_SESSION["cadastro"])){
        echo "Lista de Cadastros <br>";
        foreach($_SESSION["cadastro"] as $c){
            print_r(get_class($c));
                $c->exibe();
            echo "<br>";
        }
    }else{
        echo "Ainda não há cadastros!";
    }
?>

</section>
</body>
</html>