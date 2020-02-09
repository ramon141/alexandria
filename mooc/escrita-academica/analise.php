<?php 
  session_start();
  if(isset($_SESSION['nomeUsuario'])){
        $loginUser = $_SESSION['nomeUsuario'];
    }
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Alexandria</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/alexandria-logo.jpeg">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.php">
                                    <img src="img/logoAlexandria.png" alt="Alexandria" style="width:80px;height:80px;">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="home.php">home</a></li>
                                        <li><a href="#">MOOC <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="index.php">Escrita Acadêmica</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a  class="active" href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="material-gratuito.php">material gratuito</a>
                                                </li>
                                                <li><a href="analise.php">Análise de Sistemas</a>
                                                </li>
                                                <li><a href="bd.php">Banco de Dados</a>
                                                </li>
                                            </ul>
                                            <?php 
                                            if (isset($loginUser)) {
                                                echo "
                                                    <li style='margin-left: 400px;'> <a href='#'>$loginUser 
                                                            <i class='ti-angle-down'></i></a>
                                                            <ul class='submenu'>
                                                                <li><a href='contaUser.php'>Configuração de Conta</a>
                                                                </li>
                                                                <li><a href='logout.php'>Sair</a></li>
                                                            </ul>
                                                    </li>";
                                            }else{
                                                echo"<li style='margin-left: 100px;'>
                                                    <div class='log_chat_area d-flex align-items-center'>
                                                        <a href='#test-form' class='login popup-with-form'>
                                                           <span class='flaticon-user'>login</span>
                                                        </a>
                                                        <div class='live_chat_btn'>
                                                            <a href='#test-form2' class='login popup-with-form'>
                                                                    <span class='boxed_btn_orange'>Cadastre-se</span>
                                                            </a>
                                                        </div>
                                                    </div>";
                                            }
                                        ?>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

        <!-- bradcam_area_start -->
        <div class="bradcam_area breadcam_bg overlay2">
            <h3>Análise de Sistemas</h3>
        </div>
        <!-- bradcam_area_end -->

    <!-- content -->

    <div style="width:70%; background-color: white; color: #4682b4; padding: 10px 40px; margin: 10px 15px 10px 250px; border: none; border-radius: 4px; cursor: pointer;">

        <ul>
            <li>
                <h3 class="section_title">STAKEHOLDERS</h3>
            </li>
        </ul>

        <ul>
            <li>
                <h3>REQUISITOS (FUNCIONAIS E NÃO FUNCIONAIS)</h3>
                <p><img alt="requisitos" data-entity-type="file" data-entity-uuid="ba50045c-4cab-4a95-8909-51973ad73cc1" height="176" src="/alexandria/sites/default/files/inline-images/requisitos_0.png" width="566" /></p>
            </li>
            <li>
                <h3>PROJECT MODEL CANVAS</h3>
                <p><img alt="project" data-entity-type="file" data-entity-uuid="f5744821-5b39-4408-bbe0-214ae7de2f36" height="432" src="/alexandria/sites/default/files/inline-images/%5B3%5D%20Alexandria%20-%20Project%20Model%20Canvas.png" width="562" /></p>
            </li>
            <li>
                <h3>MAPA DE EMPATIA</h3>
                <p><img alt="Mempatia" data-entity-type="file" data-entity-uuid="e234fa57-4c4d-42a9-845a-ae6972d15b83" height="396" src="/alexandria/sites/default/files/inline-images/%5B4%5D%20Alexandria%20-%20Mapa%20de%20Empatia.png" width="556" /></p>
            </li>
            <li>
                <h3>DIAGRAMAS DE CASO DE USO</h3>
                <li>
                    <br>
                    <h5>DESCRITIVO</h5>
                    <br>
                    <h5>VISUAL</h5>
                    <p><img alt="visual" data-entity-type="file" data-entity-uuid="b1956734-81e7-4ab1-b379-888d44978477" height="730" src="/alexandria/sites/default/files/inline-images/%5B5%5DAlexandria-Diagrama%20de%20caso%20de%20uso%20geral%20do%20sistema.png" width="485" /></p>
                </li>
            </li>
            <li>
                <h3>BUSINESS MODEL CANVAS</h3>
                <p><img alt="Business" data-entity-type="file" data-entity-uuid="e56251ed-1385-4f54-82b5-45fa0197f84e" height="423" src="/alexandria/sites/default/files/inline-images/Alexandria%20-%20Business%20Model%20Canvas.png" width="564" /></p>
            </li>
            <li>
                <h3>DIAGRAMA DE ATIVIDADE</h3>
                <p><img alt="atividade" data-entity-type="file" data-entity-uuid="9d933714-fc71-4c36-a8c7-33efdb7cb97b" src="/alexandria/sites/default/files/inline-images/%5B8%5D%20Alexandria%20-%20Diagrama%20de%20Atividade_0.png" /></p>
            </li>
            <li>
                <h3>DIAGRAMA DE ESTADO</h3>
                <p><img alt="estado" data-entity-type="file" data-entity-uuid="61442914-5c7a-4df7-9c5a-a08f2ccb044a" src="/alexandria/sites/default/files/inline-images/diagrama%20de%20estado.png" /></p>
            </li>
        </ul>        
    </div>

    <!-- content end -->


    <!-- footer -->
    <footer class="footer footer_bg_1">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logoAlexandria.png" alt="Alexandria" style="width:180px;height:180px;">
                                </a>
                            </div>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="https://twitter.com/Alexandriacurso">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/alexandriacurso/">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UC6dy7wF5XG5ifLWfYBdFAhg">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contato
                            </h3>
                            <p>
                               alexandria.curso@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: #4682b4" class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p style="color: white;" class="text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright Alexandria 2019</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->


    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide" method="post" action="login.php?page=analise.php">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="img/logoAlexandria.png" alt="" style="width:100px;height:100px;">
                    </a>
                </div>
                <h3>Login</h3>
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="email" name="emailUser" placeholder="email@example.com" ><br>
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" name="senhaUser" placeholder="Digite sua senha"><br>
                        </div>
                        <div class="col-xl-12">
                            <input type="submit" class="boxed_btn_orange" value="Login">
                        </div>
                        <?php 
                        if($_GET){
                             if(strcmp($_GET['mensagem'] ."", "0") == 0){
                                echo "<div class='col-xl-12'>
                                        <p style='color:red'>Usuário e/ou senha inválido</p>
                                      </div>";
                            }
                        }

                        ?>
                    </div>
                    <p class="doen_have_acc">Não tem uma conta? 
                        <a class="dont-hav-acc" href="#test-form2">Cadastre-se</a> 
                    </p>
            </div>
        </div>
    </form>
    <!-- form itself end -->

    <!-- form itself end-->
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
                                <input type="email" placeholder="Enter email" name="emailUsuario">
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <input type="password" placeholder="Password" name="senhaUsuario">
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <input type="Password" placeholder="Confirm password" name="senhaConfirmar">
                            </div>
                            <div class="col-xl-12">
                                <button type="submit" class="boxed_btn_orange">Cadastrar</button>
                            </div>
                    </div>
            </div>
        </div>
    </form>
    <!-- form itself end -->


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>