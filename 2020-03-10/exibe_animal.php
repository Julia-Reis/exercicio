<?php
    //include "classAnimal.php";
    include "classAve.php";
    include "cabecalho.php";
?>
    
<?php
            foreach($_SESSION["animais"] as $c) {
            echo"
                Peso: ".$c->get_peso()."<br />
                Comprimento: ".$c->get_comprimento()."<br />
                Altura: ".$c->get_altura()."<br />
                Cor: ".$c->get_cor()."<br />
                Nome: ".$c->get_nome()."<br />
                Velocidade Máxima: ".$c->get_altura_max()."<br />
            ";
            }
?>

