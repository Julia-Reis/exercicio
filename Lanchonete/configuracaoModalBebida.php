<?php
$p["id"] = "Bebida";
$p["titulo"] = "Bebidas";


$p["divRow"][0] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <input type="text" name="nome" 
        id="nome" class="form-control" placeholder= "Nome Bebida..." />
    </div>
</div>';


$p["divRow"][1] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <input placeholder="Digite o preço da bebida" type="number" step="0.01" name="preco" 
        id="preco" class="form-control" />
    </div>
</div>';


$p["divRow"][2] = '
<div class="row">
    <div class="form-group col-sm-8 col-8">	                            
        <textarea name="descricao" id="descricao" class="form-control" placeholder="Digite a descrição da bebida...">
        </textarea>
    </div>
</div>';
?> 