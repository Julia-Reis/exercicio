<?php
    $p = null;
    $p["cabecalho"] = array("Data","Horário","Time da Casa","Time Visitante");

    include "conexao.php";

    $sql = "SELECT * FROM time";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        $time[$linha["id_time"]] = $linha["nome"];
    }


    $sql = "SELECT * FROM jogo ORDER BY data DESC";

    $resultado = $conexao->query($sql);

    foreach($resultado as $linha){
        $jogo["0"] = $linha["id_jogo"];
        $jogo["id_jogo"]=$linha["id_jogo"];
        $jogo["data"]=$linha["data"];
        $jogo["horario"]=$linha["horario"];
        $jogo["time1"]=$time[ $linha["cod_time1"] ];
        $jogo["time2"]=$time[ $linha["cod_time2"] ];
        $p["dados"][]=$jogo;
    }
?>