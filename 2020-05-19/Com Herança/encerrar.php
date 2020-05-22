<?php
session_start();
session_destroy();
header("location: listar_filmes.php");
?>