<?php
include "classAnimal.php";
/*include "form_animal.php";
include "classAnfibio_reptil.php";
include "classAnfibio.php";
include "classAve.php";
include "classPeixe.php";
include "classReptil.php";*/
include "cabecalho.php";

    $tipo = $_GET["tipo"];

    echo"
    <form action='instanciarAnimal.php' method='post'>
            Cadastrar Animal: $tipo <br />
            <input type='hidden' name='tipo' value='$tipo' />
            <input type='number' name='peso' placeholder='Peso' />
            <input type='number' name='comprimento' placeholder='Comprimento' />
            <br />
            <input type='number' name='altura' placeholder='altura' />
            <input type='text' name='cor' placeholder='Cor Predominante' />
            <br />
            <input type='text' name='nome' placeholder='Nome Espécie' />
            <br />";

    if($tipo=="ave") {
        echo "
            <input type='number' name='altura_max' placeholder='Altura Máxima'/>
        ";
    }
    if($tipo=="anfibio" || $tipo=="reptil") {
        echo"
            <input type='number' name='tempo_max' placeholder='Tempo Máximo Submerso'/>
        ";
    }

    if($tipo=="mamifero") {
        echo"
            <input type='number' name='velocidade_max' placeholder='Velocidade Máxima'/>
        ";
    }

    if($tipo=="peixe") {
        echo"
            <input type='number' name='temperatura_med' placeholder='Temperatura Média'/>
            ";
    }

    echo"
    <br />
    <input type='submit' value='Enivar' />
</form>";
?>