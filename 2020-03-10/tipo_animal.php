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
    if($tipo=="ave") {
        echo "
        <form action='instanciarAnimal.php' method='GET'>
            Cadastrar Animal: $tipo <br />
            <input type='number' name='peso' placeholder='Peso' />
            <input type='number' name='comprimento' placeholder='Comprimento' />
            <br />
            <input type='number' name='altura' placeholder='altura' />
            <input type='text' name='cor' placeholder='Cor Predominante' />
            <br />
            <input type='text' name='nome' placeholder='Nome Espécie' />
            <br />
            <input type='number' name='altura_max' placeholder='Altura Máxima'/>
            <br />
            <input type='submit' value='Enivar' />
        </form>
        ";
    }
    if($tipo=="anfibio" || $tipo=="reptil") {
        echo"
        <form action='instanciarAnimal.php' method='GET'>
            Cadastrar Animal: $tipo
            <input type='number' name='peso' placeholer='Peso' />
            <input type='number' name='comprimento' placeholder='Comprimento' />
            <br />
            <input type='number' name='altura' placeholder='altura' />
            <input type='text' name='cor' placeholder='Cor Predominante' />
            <br />
            <input type='text' name='nome' placeholder='Nome Espécie' />
            <br />
            <input type='number' name='tempo_max' placeholder='Tempo Máximo Submerso'/>
            <br />
            <input type='submit' value='Enivar' />
        </form>
        ";
    }

    if($tipo=="mamifero") {
        echo"
        <form action='instanciarAnimal.php' method='GET'>
            Cadastrar Animal: $tipo
            <input type='number' name='peso' placeholer='Peso' />
            <input type='number' name='comprimento' placeholder='Comprimento' />
            <br />
            <input type='number' name='altura' placeholder='altura' />
            <input type='text' name='cor' placeholder='Cor Predominante' />
            <br />
            <input type='text' name='nome' placeholder='Nome Espécie' />
            <br />
            <input type='number' name='velocidade_max' placeholder='Velocidade Máxima'/>
            <br />
            <input type='submit' value='Enivar' />
        </form>
        ";
    }

    if($tipo=="peixe") {
        echo"
        <form action='instanciarAnimal.php' method='GET'>
            Cadastrar Animal: $tipo
            <input type='number' name='peso' placeholer='Peso' />
            <input type='number' name='comprimento' placeholder='Comprimento' />
            <br />
            <input type='number' name='altura' placeholder='altura' />
            <input type='text' name='cor' placeholder='Cor Predominante' />
            <br />
            <input type='text' name='nome' placeholder='Nome Espécie' />
            <br />
            <input type='number' name='temperatura_med' placeholder='Temperatura Média'/>
            <br />
            <input type='submit' value='Enivar' />
        </form>
        ";
    }
?>