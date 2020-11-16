<?php
    $p = null;
    $p["cabecalho"] = array("Nome","Descricao","Preco");

    include "conexao.php";

    $sql = "SELECT * FROM acompanhamento ORDER BY nome";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        $p["dados"][]=$linha;
    }
?>