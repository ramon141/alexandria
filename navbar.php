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

<!-- <link rel="stylesheet" href="css/responsive.css"> -->
<body>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Alexandria</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="/alexandria/img/alexandria-logo.jpeg">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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

        </style>


    <?php
    echo '<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: linear-gradient(to right, rgb(73, 206, 201), rgb(70, 130, 180));">
            <a class="navbar-brand" href="#"><img src="http://localhost/alexandria/img/logoAlexandria.png" width="50" height="50"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Início</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            MOOC
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Escrita Acadêmica</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contate-nos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Teste</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Blog
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Material Gratuito</a>
                            <a class="dropdown-item" href="#">Análise de Sistemas</a>
                            <a class="dropdown-item" href="#">Banco de Dados</a>
                        </div>
                    </li>

                </ul>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><span class="btn badge-info">Login</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="btn badge-info">Cadastrar</span></a>
                    </li>
                </ul>
            </div>
        </nav>';
    
    if (strcmp($statusPagamento, "1") == 0) {
        echo "<li><a href='/alexandria/mooc/escrita-academica/forum.php'>Fórum</a></li>";
    }

    if (isset($loginUser)) {
        echo "
						<div class='col-xl-3 col-lg-3'>
							<div class='main-menu d-none d-lg-block'>
								<ul>
									<li><a href='#'> $loginUser <i class='ti-angle-down'></i></a>
										<ul class='submenu'>
											<li><a href='/alexandria/contaUser.php'>Configuração de Conta</a></li>
											<li><a href='/alexandria/logout.php'>Sair</a></li>
										</ul>
									</li>
								</ul>
							</div>  
						</div>  ";
    } else {
        echo"
							<div class='col-xl-3 col-lg-3 d-none d-lg-block'>
								<div class='log_chat_area d-flex align-items-center'>
									
										<button type='button' class='btn' style='color: white;' data-toggle='modal' data-target='#modalLogin'>Entrar</button>
									
									<a data-toggle='modal' data-target='#modalCadastro' class=''>
										<span class='boxed_btn_orange'>Cadastrar</span>
									</a>
                                                                        
								</div>
							</div>  ";
    }
    echo "
						<div class='col-12'>
							<div class='mobile_menu d-block d-lg-none'></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header> ";
    ?>


    <!--     form itself end
        <div class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    
         form itself end
        <form id="test-form2" class="white-popup-block mfp-hide" method="post" action="cadastro.php" >
            <div class="popup_box ">
                <div class="popup_inner">
                    <div class="logo text-center">
                        <a href="#">
                            <img src="img/logoAlexandria.png" alt="" style="width:100px;height:100px;">
                        </a>
                    </div>
                    <h3>Cadastro</h3>
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <input type="text" placeholder="Nome" name="nomeUsuario">
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <input type="text" placeholder="Sobrenome" name="sobrenomeUsuario">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="email" placeholder="Digite seu email" name="emailUsuario">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" placeholder="Senha" name="senhaUsuario">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="Password" placeholder="Confirmar senha" name="senhaConfirmar">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn_orange">Cadastrar</button>
                        </div>
                        //<?php
//                    if ($_GET) {
//                        if (strcmp($_GET['mensagem'] . "", "1") == 1) {
//                            echo "
//                        <div class='col-xl-12'>
//                        <p style='color:red'>Senha Difente</p>
//                        </div>";
//                        }
//                    }
    ?>
                    </div>
                </div>
            </div>
    
        </form>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>-->


    <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="TitulomodalLogin" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form class="form-horizontal" action="/alexandria/cadastro.php" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TitulomodalLogin" style="float: left; margin-left: 38%;" >Cadastrar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <fieldset>


                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="nomeUsuario">Nome</label>  
                                <div class="col-md-12">
                                    <input id="nomeUsuario" name="nomeUsuario" type="text" placeholder="Digite seu nome" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="sobrenomeUsuario">Sobrenome</label>  
                                <div class="col-md-12">
                                    <input id="sobrenomeUsuario" name="sobrenomeUsuario" type="text" placeholder="Digite seu sobrenome" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="emailUsuario">E-mail</label>  
                                <div class="col-md-12">
                                    <input id="emailUsuario" name="emailUsuario" type="text" placeholder="Digite seu e-mail" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="senhaUsuario">Senha</label>
                                <div class="col-md-12">
                                    <input id="senhaUsuario" name="senhaUsuario" type="password" placeholder="Digite sua senha" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="senhaConfirmar">Confirme sua senha</label>
                                <div class="col-md-12">
                                    <input id="senhaConfirmar" name="senhaConfirmar" type="password" placeholder="Digite sua senha novamente" class="form-control input-md" required="">

                                </div>
                            </div>

                        </fieldset>




                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="TitulomodalLogin" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form class="form-horizontal" action="/alexandria/login.php?page=<?= $_SERVER['REQUEST_URI']; ?>" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="TitulomodalLogin" style="float: left; margin-left: 44%;" >Entrar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <fieldset>


                            <!-- Text input-->
                            <div class="form-group" align="center">
                                <span>E-mail</span>
                                <div class="col-md-12">
                                    <input id="emailUser" name="emailUser" type="text" placeholder="Digite seu e-mail" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group" align="center">
                                <span>Senha</span>
                                <div class="col-md-12">
                                    <input id="senhaUser" name="senhaUser" type="password" placeholder="Digite sua senha" class="form-control input-md" required="">

                                </div>
                            </div>
                            
                            <div align="center">
                                <a href="/alexandria/contatar/sendMail.php">Esqueci minha senha</a>
                            </div>
                            
                             <?php
							if($_GET){
								if(strcmp($_GET['mensagem'] ."", "0") == 0){
									echo "<script src='//code.jquery.com/jquery-1.11.0.min.js'></script>
										  <script type='text/javascript' src='js/bootstrap.js'></script>
										  <script type='text/javascript'>
										  $(window).load(function() {
										      $('#modalLogin').modal('show');
										  });
										  </script>";
										  echo "<br><tag style='float: left; margin-left: 28%;color:red;'>Usuário e/ou senha inválido(s)</tag><br><br>";
								}
							}
						?>
                        </fieldset>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
