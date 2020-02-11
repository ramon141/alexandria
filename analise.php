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
                         <?php include 'navbar.php' ?>
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

    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-100">
                        <!-- content -->
                        <ul>
                            <li>
                                <h3 style="color: #04D2C8; font-size: 36px;">STAKEHOLDERS</h3>
                            </li>
                            <li>
                                <h3 style="color: #04D2C8; font-size: 36px;">REQUISITOS (FUNCIONAIS E NÃO FUNCIONAIS)</h3>
                                <p><img alt="requisitos" height="176" src="" width="566"/></p>
                            </li>
                            <li>
                                <h3 style="color: #04D2C8; font-size: 36px;">PROJECT MODEL CANVAS</h3>
                                <p><img alt="pmc" height="432" src="" width="562"/></p>
                            </li>
                            <li>
                                <h3 style="color: #04D2C8; font-size: 36px;">MAPA DE EMPATIA</h3>
                                <p><img alt="MapaEmpatia" height="396" src="" width="556" /></p>
                            </li>
                            <li>
                                <h3 style="color: #04D2C8; font-size: 36px;">DIAGRAMAS DE CASO DE USO</h3>
                                <li>
                                    <h4 style="color: #04D2C8; font-size: 20px;">DESCRITIVO</h4>
                                    <h4 style="color: #04D2C8; font-size: 20px;">VISUAL</h4>
                                    <p><img alt="visual" height="730" src="" width="485" /></p>
                                </li>
                            </li>
                            <li>
                                <h3 style="color: #04D2C8; font-size: 36px;">BUSINESS MODEL CANVAS</h3>
                                <p><img alt="bmc" height="423" src="" width="564" /></p>
                            </li>
                            <li>
                                <h3 style="color: #04D2C8; font-size: 36px;">DIAGRAMA DE ATIVIDADE</h3>
                                <p><img alt="dAtividade" height="423" src="" width="564" /></p>
                            </li>
                            <li>
                                <h3 style="color: #04D2C8; font-size: 36px;">DIAGRAMA DE ESTADO</h3>
                                <p><img alt="sEstado" height="423" src="" width="564" /></p>
                            </li>
                        </ul>
                    </div>

                    <!-- content end -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->


<!-- footer -->
<footer style="background-color: #4682b4;" class="footer">
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
                                    <a style="background-color: #04D2C8;" href="https://twitter.com/AlexandriaMOOC" target="_blank">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a style="background-color: #04D2C8;" href="https://www.instagram.com/alexandriaMOOC/" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a style="background-color: #04D2C8;" href="https://www.youtube.com/channel/UC6dy7wF5XG5ifLWfYBdFAhg" target="_blank">
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
                <a>Todos os direitos reservados para o site Alexandria 2020</a>
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