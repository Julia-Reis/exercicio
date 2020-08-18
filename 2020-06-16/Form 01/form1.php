<?php
    require_once "classeForm.php";
    require_once "classeInput.php";
    $valor["method"]="post";
    $valor["action"]="processa_form1.php";
    $f = new Form($valor);

    $valor = null;
    $valor["type"] = "text";
    $valor["name"] = "nome";
    $valor["placeholder"] = "Nome...";
    $i1 = new Input($valor);

    $f->adiciona_entrada($i1);

    $valor = null;
    $valor["type"] = "email";
    $valor["name"] = "email";
    $valor["placeholder"] = "Email...";
    $i2 = new Input($valor);

    $f->adiciona_entrada($i2);

    $valor = null;
    $valor["type"] = "number";
    $valor["name"] = "idade";
    $valor["placeholder"] = "Idade";
    
    $i3 = new Input($valor);

    $f->adiciona_entrada($i3);

    $valor = null;
    $valor["type"] = "number";
    $valor["name"] = "telefone";
    $valor["placeholder"] = "Telefone";
    $i4 = new Input($valor);

    $f->adiciona_entrada($i4);

    $valor = null;
    $valor["type"] = "text";
    $valor["name"] = "endereco";
    $valor["placeholder"] = "Endereço";
    $i5 = new Input($valor);

    $f->adiciona_entrada($i5);

    $valor = null;
    $valor["type"] = "submit";
    $valor["value"] = "Enviar Formulário";
    $i6 = new Input($valor); 

    $f->adiciona_entrada($i6);

    $f->exibir();

?>