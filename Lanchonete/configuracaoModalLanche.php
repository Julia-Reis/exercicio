<?php

$p["id"] = "Lanche";
$p["titulo"] = "Lanches";


$p["divRow"][0] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <input type="text" name="nome" 
        id="nome" class="form-control" placeholder= "Nome Lanche..." />
    </div>
</div>';


$p["divRow"][1] = '
<div class="row">
    <div class="form-group col-sm-12 col-12">	                            
        <input placeholder="Digite o preço do lanche" type="number" step="0.01" name="preco" 
        id="preco" class="form-control" />
    </div>
</div>';


$p["divRow"][2] = '
<div class="row">
    <div class="form-group col-sm-8 col-8">	                            
        <textarea name="descricao" id="descricao" class="form-control" placeholder="Digite a descrição do lanche...">
        </textarea>
    </div>
</div>';
?> 