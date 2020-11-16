<?php

$p["id"] = "Combo";
$p["titulo"] = "Combo";

$p["divRow"][0] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">							
        <input type="text" name="nome" id="nome"
                class="form-control" 
                placeholder="Nome do combo..." />
    </div>
</div>';


$p["divRow"][1] = '
<div class="row">
    <div class="form-group col-sm-6 col-6">	                            
        <input type="date" name="desconto" 
        id="desconto" placeholder="descon" class="form-control" />
    </div>
    <div class="form-group col-sm-6 col-6">	                            
        <input type="number" name="preco" 
        id="preco" class="form-control" placeholder="Preço..." />
    </div>
</div>';

$p["divRow"][2] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <select name="cod_time" class="form-control">
            <option>::Selecione Bebida::</option>';
        require_once "conexao.php";

        $select = "SELECT id_bebida, nome FROM Bebida ORDER BY nome";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][2] .= '<option value="'.$linha["id_bebida"].'">'.$linha["nome"].'</option>'; 
        }
            
$p["divRow"][2] .= '
        </select>
    </div>
</div>';

$p["divRow"][3] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <select name="cod_time" class="form-control">
            <option>::Selecione Lanche::</option>';
        require_once "conexao.php";

        $select = "SELECT id_lanche, nome FROM Lanche ORDER BY nome";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][2] .= '<option value="'.$linha["id_lanche"].'">'.$linha["nome"].'</option>'; 
        }
            
$p["divRow"][3] .= '
        </select>
    </div>
</div>';

$p["divRow"][4] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <select name="cod_time" class="form-control">
            <option>::Selecione Acomphamento::</option>';
        require_once "conexao.php";

        $select = "SELECT id_acompanhamento, nome FROM Acomphamento ORDER BY nome";
        $resultado = $conexao->query($select);
        foreach($resultado as $linha){
            $p["divRow"][2] .= '<option value="'.$linha["id_acompanhamento"].'">'.$linha["nome"].'</option>'; 
        }
            
$p["divRow"][4] .= '
        </select>
    </div>
</div>';
?>