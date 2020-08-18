<?php
    require_once "classeForm.php";
    require_once "classeInput.php";
    $valor["method"]="post";
    $valor["action"]="processa_form2.php";
    $f = new Form($valor);

    $valor = null;
    $valor["name"] = "tipo";
    $valor["required"] = true;
    $s = new Select($valor);

    $v = null;
    $v["hidden"]=true;
    $v["value"]="";
    $v["label"]=":: Animal::";
    $op1 = new Option($v);
    $s->adiciona_option($op1);

    $v = null;
    $v["value"]="gato";
    $v["label"]="Gato";
    $op2 = new Option($v);
    $s->adiciona_option($op2);

    $v = null;
    $v["value"]="cachorro";
    $v["label"]="Cachorro";
    $op3 = new Option($v);    
    $s->adiciona_option($op3);

    $valor = null;
    $valor["type"] = "text";
    $valor["name"] = "nome";
    $valor["placeholder"] = "Nome do animal...";
    $i1 = new Input($valor);

    $f->adiciona_entrada($i1);

    $valor = null;
    $valor["type"] = "number";
    $valor["name"] = "peso";
    $valor["placeholder"] = "Peso...";
    $i2 = new Input($valor);

    $f->adiciona_entrada($i2);

    $valor = null;
    $valor["type"] = "date";
    $valor["name"] = "data";
    
    $i3 = new Input($valor);

    $f->adiciona_entrada($i3);

    $valor = null;
    $valor["type"] = "number";
    $valor["name"] = "cpf";
    $valor["placeholder"] = "CPF proprietario...";
    $i4 = new Input($valor);

    $f->adiciona_entrada($i4);

    $valor = null;
    $valor["type"] = "submit";
    $valor["value"] = "Enviar Formulário";
    $i5 = new Input($valor); 

    $f->adiciona_entrada($i5);

    $f->exibir();

?>