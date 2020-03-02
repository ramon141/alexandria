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


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>        
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158692559-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-158692559-1');
        </script>
        <style>
            ::-webkit-scrollbar {
                width: 17px;
            }

            ::-webkit-scrollbar-thumb {
                -webkit-border-radius: 10px;
                border-radius: 10px;
                background: rgba(71,155,187,0.8); 
            }

        </style>

        <style>
            .modal-backdrop {
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 1040;
                background-color: #000;
            }


        </style>
    </head>
    <body>
        <script>
document.body.innerHTML = document.body.innerHTML.replace('<div style="text-align:right;position:fixed;bottom:3px;right:3px;width:100%;z-index:999999;cursor:pointer;line-height:0;display:block;"><a target="_blank" href="https://www.freewebhostingarea.com" title="Free Web Hosting with PHP5 or PHP7"><img alt="Free Web Hosting" src="https://www.freewebhostingarea.com/images/poweredby.png" style="border-width: 0px;width: 180px; height: 45px; float: right;"></a></div>',"");
            $(document).ready(function () {
                
                $("#lembreid").hide();
                $("#formCadastro").submit(function (e) {
                    if (document.getElementById("senha").value !== document.getElementById("senhaConf").value) {
                        alert("As senhas não coicidem");
                        e.preventDefault();
                    }
                });
            }
            );

            function lem() {
                $("#lembreid").hide();
                $("#esquecid").show();
                $("#senhaUser").show();
                $("#senhaUserl").show();
                document.getElementById("senhaUser").value = "";
                document.getElementById("submentrar").innerHTML = "Entrar";
                var f = "/alexandria/login?page=<?= parse_url($_SERVER['REQUEST_URI'])['path']; ?>";
                document.getElementById("formlogin").action = f;
            }

            function esq() {
                $("#esquecid").hide();
                $("#lembreid").show();
                $("#senhaUser").hide();
                $("#senhaUserl").hide();
                document.getElementById("senhaUser").value = "xxxx";
                document.getElementById("submentrar").innerHTML = "Recuperar minha senha";
                var f = "/alexandria/esqueciMinhaSenha?page=<?= parse_url($_SERVER['REQUEST_URI'])['path']; ?>";
                document.getElementById("formlogin").action = f;
            }
        </script>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#"><img src="/alexandria/img/logoAlexandria.png" width="80" height="80"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarNav">
                <ul class="navbar-nav" id='navigation'>
                    <li class="nav-item active">
                        <a style="color: white;" class="nav-link" href="/alexandria/">Início</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a style="color: white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            MOOC
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a style="color: #00BFFF;" class="dropdown-item" href="/alexandria/mooc/escrita-academica/">Escrita Acadêmica</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="/alexandria/about">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a style="color: white;" class="nav-link" href="/alexandria/contatar/contact">Contate-nos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a style="color: white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Blog
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a style="color: #00BFFF;" class="dropdown-item" href="/alexandria/material-gratuito">Material Gratuito</a>
                            <a style="color: #00BFFF;" class="dropdown-item" href="/alexandria/analise">Análise de Sistemas</a>
                            <a style="color: #00BFFF;" class="dropdown-item" href="/alexandria/bd">Banco de Dados</a>
                        </div>
                    </li>
                    <?php
                    if (strcmp($statusPagamento, "1") == 0) {
                        echo "<li class='nav-item'><a style='color: white;' class='nav-link' href='/alexandria/mooc/escrita-academica/forum'>Fórum</a></li>";
                    }
                    ?>

                </ul>

                <?php
                if (isset($loginUser)) {
                    echo "
                <ul class='nav navbar-nav ml-auto'>
                    <li class='nav-item dropdown '>
                        <a style='color: white; margin: 0 100X; ' class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> $loginUser
                        </a>
                        <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdown'>
                            <a style='color: #00BFFF;' class='dropdown-item' href='/alexandria/contaUser'>Configuração de Conta</a>
                            <a style='color: #00BFFF;' class='dropdown-item' href='/alexandria/logout'>Sair</a>
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
                    </ul> ";
                }
                ?>


            </div>
        </nav>

        <!-- Modal Cadastro -->
        <div id="modalCadastro" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Conteúdo do modal-->
                <div class="modal-content">
                    <form class="form-horizontal" id="formCadastro" action="/alexandria/cadastro" method="post">
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
                            <input value="<?= parse_url($_SERVER['REQUEST_URI'])['path']; ?>" type="hidden" name="pagina">
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
                    <form class="form-horizontal" id="formlogin" action="/alexandria/login?page=<?= parse_url($_SERVER['REQUEST_URI'])['path']; ?>" method="post">
                        <!-- Cabeçalho do modal -->
                        <div class="modal-header">
                            <h4 style= "color: #4682b4;" class="modal-title"> Entrar </h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Corpo do modal -->
                        <div style="background-color: #EBECF0" class="modal-body">

                            <label style= "color: #4682b4;" for="lname">E-mail</label> <br> 
                            <input type="email" class="form-control input-lg" placeholder="email@example.com" name="emailUser" id="emailUser" required=""><br>
                            <label style= "color: #4682b4;" for="fname" id="senhaUserl">Senha</label> <br> 
                            <input type="password" class="form-control input-lg" placeholder="Digite sua senha" id="senhaUser" name="senhaUser" required="" value=""><br>

                            <button style="margin: 1px 155px;" onclick="esq()" id="esquecid" type="button" class="btn btn-link"> Esqueci minha senha </button>
                            <button style="margin: 1px 155px;" onclick="lem()" id="lembreid" type="button" class="btn btn-link"> Lembrei minha senha </button>

                            <?php
                            if ($_GET && $_GET['mensagem']) {


                                echo '
                                                        <script>
          $(document).ready(function(){
  
    $("#modalLogin").modal();
  
});
        </script>  ';


                                if (strcmp($_GET['mensagem'] . "", "0") == 0) {
                                    echo "<br><tag style='float: left; margin-left: 28%;color:red;'>Usuário e/ou senha inválido(s)</tag><br><br>";
                                }
                                if (strcmp($_GET['mensagem'] . "", "1") == 0) {
                                    echo "<br><tag style='float: left; margin-left: 28%;color:green;'>Senha restaurada. Verifique seu e-mail.</tag><br><br>";
                                }
                                if (strcmp($_GET['mensagem'] . "", "2") == 0) {
                                    echo "<br><tag style='float: left; margin-left: 28%;color:red;'>O e-mail não foi localizado no sistema.</tag><br><br>";
                                }
                            }
                            ?>
                        </div>

                        <!-- Rodapé do modal-->
                        <div class="modal-footer">
                            <button class="btn btn-primary btn-lg btn-block" type="submit" id="submentrar" class="btn btn-success">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
