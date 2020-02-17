<?php
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    if (isset($_SESSION['nomeUsuario'])) {
        $loginUser = $_SESSION['nomeUsuario'];
    }

    if (isset($_SESSION['statusPagamento'])) {
        $statusPagamento = $_SESSION['statusPagamento'];
    } else {
        $statusPagamento = 0;
    }
?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <?php if($_GET && isset($_GET['i']) && strcmp($_GET['i'], "i") == 0){
echo '
        <link rel="stylesheet" href="/alexandria/css/bootstrap.min.css">
        <link rel="stylesheet" href="/alexandria/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/alexandria/css/font-awesome.min.css">
        <link rel="stylesheet" href="/alexandria/css/themify-icons.css">
        <link rel="stylesheet" href="/alexandria/css/nice-select.css">
        <link rel="stylesheet" href="/alexandria/css/flaticon.css">
        <link rel="stylesheet" href="/alexandria/css/gijgo.css">
        <link rel="stylesheet" href="/alexandria/css/animate.css">
        <link rel="stylesheet" href="/alexandria/css/slicknav.css">
        <link rel="stylesheet" href="/alexandria/css/style.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">';
    }?>
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
            position: absolute;
            transform: translate3d(5px, 28px, 0px); /* distancia entre menu e btn */
            top: 0px;
            left: 0px;
            will-change: transform;
        }
        .dropdown {
            display: inline-block; /* deixa o LO do "tamanho do próprio texto" e não da largura inteira da tela*/
            list-style: none; /* rita a "bolinha" do LI*/
        }

        .right {

        }

    </style>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: linear-gradient(to right, rgb(73, 206, 201), rgb(70, 130, 180));">
        <a class="navbar-brand" href="#"><img src="/alexandria/img/logoAlexandria.png" width="80" height="80"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarNav">
            <ul class="navbar-nav" id='navigation'>
                <li class="nav-item active">
                    <a style="color: white;" class="nav-link" href="/alexandria/index.php">Início</a>
                </li>
                <li class="nav-item dropdown">
                    <a style="color: white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        MOOC
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a style="color: #00BFFF;" class="dropdown-item" href="/alexandria/mooc/escrita-academica/index.php">Escrita Acadêmica</a>

                    </div>
                </li>
                <li class="nav-item">
                    <a style="color: white;" class="nav-link" href="/alexandria/about.php">Sobre</a>
                </li>
                <li class="nav-item">
                    <a style="color: white;" class="nav-link" href="/alexandria/contatar/contact.php">Contate-nos</a>
                </li>
                <li class="nav-item dropdown">
                    <a style="color: white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Blog
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a style="color: #00BFFF;" class="dropdown-item" href="/alexandria/material-gratuito.php">Material Gratuito</a>
                        <a style="color: #00BFFF;" class="dropdown-item" href="/alexandria/analise.php">Análise de Sistemas</a>
                        <a style="color: #00BFFF;" class="dropdown-item" href="/alexandria/bd.php">Banco de Dados</a>
                    </div>
                </li>
                <?php if (strcmp($statusPagamento, "1") == 0) {
                    echo "<li class='nav-item'><a style='color: white;' class='nav-link' href='/alexandria/mooc/escrita-academica/forum.php'>Fórum</a></li>"; } ?>

            </ul>

                <?php
                if (isset($loginUser)) {
                echo "
                <ul class='nav navbar-nav ml-auto'>
                    <li class='nav-item dropdown '>
                        <a style='color: white; margin: 0 100X; ' class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> $loginUser
                        </a>
                        <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdown'>
                            <a style='color: #00BFFF;' class='dropdown-item' href='contaUser.php'>Configuração de Conta</a>
                            <a style='color: #00BFFF;' class='dropdown-item' href='logout.php'>Sair</a>
                        </div>
                    </li>
                </ul>
                    ";
                } else {
                echo "
                    <ul class='nav navbar-nav ml-auto' >
                        <li class='nav-item active'>
                            <button style='margin: 0 15px;' type='button' class='btn badge-info' data-toggle='modal' data-target='#modalLogin'> Entrar </button></li> 
                        <li class='nav-item'>
                            <button type='button' class='btn badge-info' data-toggle='modal' data-target='#modalCadastro'> Cadastrar </button>
                        </li>
                    </ul> "; }
                ?>
            
            
        </div>
    </nav>

<!-- Modal Cadastro -->
<div id="modalCadastro" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Conteúdo do modal-->
        <div class="modal-content">
            <form class="form-horizontal" action="cadastro.php" method="post">
                <!-- Cabeçalho do modal -->
                <div class="modal-header">
                    <h4 style= "color: #4682b4;" class="modal-title" > Cadastre-se </h4> 
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Corpo do modal -->
                <div style="background-color: #EBECF0" class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <label style= "color: #4682b4;" for="fname">Nome</label> <br> 
                            <input type="text" class="form-control input-lg" id="fname" name="nomeUsuario" placeholder="Digite seu nome" required>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <label style= "color: #4682b4;" for="fname">Sobrenome</label> <br> 
                            <input type="text" class="form-control input-lg" id="lname" name="sobrenomeUsuario" placeholder="Digite seu ultimo nome" required><br>
                        </div>
                    </div>
                    <label style= "color: #4682b4;" for="lname">E-mail</label> <br> 
                    <input type="text" class="form-control input-lg" id="email" name="emailUsuario" placeholder="email@example.com" required><br>
                    <label style= "color: #4682b4;" for="fname"> Criar Senha</label> <br> 
                    <input type="password" class="form-control input-lg" id="senha" name="senhaUsuario" placeholder="Digite sua senha" required><br>
                    <label style= "color: #4682b4;" for="fname">Confirmar Senha</label> <br> 
                    <input type="password" class="form-control input-lg" id="senhaConf" name="senhaConfirmar" placeholder="Digite sua senha novamente" required> <br>
                </div>

                <!-- Rodapé do modal-->
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Cadastrar">
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Login -->
<div id="modalLogin" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Conteúdo do modal-->
        <div class="modal-content">
            <form class="form-horizontal" action="login.php?page=<?= $_SERVER['REQUEST_URI'];?>" method="post">
                <!-- Cabeçalho do modal -->
                <div class="modal-header">
                    <h4 style= "color: #4682b4;" class="modal-title"> Entrar </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Corpo do modal -->
                <div style="background-color: #EBECF0" class="modal-body">

                  <label style= "color: #4682b4;" for="lname">E-mail</label> <br> 
                  <input type="text" class="form-control input-lg" placeholder="email@example.com" name="emailUser"><br>
                  <label style= "color: #4682b4;" for="fname" >Senha</label> <br> 
                  <input type="password" class="form-control input-lg" placeholder="Digite sua senha" name="senhaUser"><br>
                  
                  <a style="margin: 1px 155px;" href="editDate.php"> Esqueci minha senha </a>

                  <?php
                  if($_GET){
                    if(strcmp($_GET['mensagem'] ."", "0") == 0){
                        echo "<script src='//code.jquery.com/jquery-1.11.0.min.js'></script>
                        <script type='text/javascript' src='js/bootstrap.js'></script>
                        <script type='text/javascript'>
                        $(window).load(function() {
                         $('#modalLogin').modal('show'); });
                         </script>";
                         echo "<br><tag style='float: left; margin-left: 28%;color:red;'>Usuário e/ou senha inválido(s)</tag><br><br>";
                     }
                  }
                  ?>
                </div>

                <!-- Rodapé do modal-->
                <div class="modal-footer">
                    <button class="btn btn-primary btn-lg btn-block" type="submit" class="btn btn-success">Entrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
