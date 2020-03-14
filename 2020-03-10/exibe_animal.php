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
                Nome: ".$c->get_nome()."<br />";
                $tipo = get_class($c);
               
                if($tipo == "ave"){
                    echo"
                    Altura Máxima: ".$c->get_altura_max();
                }
                if($tipo == "mamifero"){
                    echo"
                    Velocidade Máxima: ".$c->get_velocidade_max();
                }
                if($tipo == "peixe"){
                    echo"
                    Temperatura Média: ".$c->get_temperatura_med();
                }
                if($tipo=="anfibio" || $tipo=="reptil"){
                    echo'
                    Tempo Máximo Submerso:'.$c->get_tempo_max();
                }
               
            }
        

?>

