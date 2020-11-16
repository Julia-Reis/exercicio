<?php

$p["id"] = "Bebida";
$p["titulo"] = "Bebida";

$p["divRow"][0] = '
<div class="row">
    <div class="form-group col-sm-8 col-8">							
        <input type="text" name="nome" id="nome"
                class="form-control" />
    </div>
    <div class="form-group col-sm-4 col-4">							
        <input type="number" step="0.01" name="preco" id="preco"
                class="form-control" />
    </div>
</div>';

$p["divRow"][1] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <select name="cod_time1" class="form-control">
            <option>::Selecione Time da Casa::</option>';
        require_once "conexao.php";

        $select = "SELECT id_time, nome FROM time ORDER BY nome";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][1] .= '<option value="'.$linha["id_time"].'">'.$linha["nome"].'</option>'; 
        }
            
$p["divRow"][1] .= '
        </select>
    </div>
</div>';



$p["divRow"][2] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <select name="cod_time2" class="form-control">
            <option>::Selecione Time Visitante::</option>';
        require_once "conexao.php";

        $select = "SELECT id_time, nome FROM time ORDER BY nome";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][2] .= '<option value="'.$linha["id_time"].'">'.$linha["nome"].'</option>'; 
        }
            
$p["divRow"][2] .= '
        </select>
    </div>
</div>';


?>