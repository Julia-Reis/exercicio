<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Página Inicial</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/icon?family=Material+Icons" />
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top"> 
            <!-- logotipo / brand -->
            <a href="index.php" class="navbar-brand logotipo">
                <img src="img/logo.png" class="rounded" alt="Logotipo do Campeonato" />
            </a>

            <!-- botão que aparece quando a tela for pequena -->
            <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="lanche.php">
                        Lanche</a></li>
                    <li class="nav-item"><a class="nav-link" href="bebida.php">
                        Bebida</a></li>
                    <li class="nav-item"><a class="nav-link" href="acompanhamento.php">
                        Acompanhamentos</a></li>
                    <li class="nav-item"><a class="nav-link" href="combo.php">
                        Combos</a></li>
                </ul>            
            </div>
        </nav>
        <nav>
            <ol class="breadcrumb bread migalha">
                <li class="breadcrumb-item">
                    <a href="">Início</a>
                </li>                
            </ol>
        </nav>

        <div id="home">
            <h3>Bem vindo ao sistema de Lanchonete</h3>            
            <p>Neste sistema você pode comprar lanches.</p>
                <p>Navegue pelo menu acima para realizar as operações. </p>    
        </div>

	</div>

    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/bootstrap-datepicker.pt-BR.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>