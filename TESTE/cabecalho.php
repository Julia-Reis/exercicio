<?php
session_start();
echo '
      <!DOCTYPE html>
      <html lang="pt-BR">
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
          <link rel="stylesheet" href="css/css.css">
          <link rel="shortcut icon" type="image/png" href="img/favicon.png">
          <title>Reis do Gesso!</title>
        </head>
        <body>
        <div class="container">
          <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="index.php"><img id="logo" src="img/Reis do Gesso.png" alt="Reis do Gesso"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">Serviços</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="orcamento.php">Orçamento</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">Imagens</a>
                </li>
              </ul>
              <a class="nav-link" href="login.php">Entrar</a>
              <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
  ';
  ?>