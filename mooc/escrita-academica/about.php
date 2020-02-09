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
                                        <li><a class="active" href="about.php">About</a></li>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="material-gratuito.php">material gratuito</a></li>
                                                <li><a href="analise.php">Análise de Sistemas</a></li>
                                                <li><a href="bd.php">Banco de Dados</a></li>
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
            <h3>About Us</h3>
        </div>
        <!-- bradcam_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="single_about_info">
                        <h3>Alexandria</h3>
                        <p align="justify">O Alexandria é um sistema que, inicialmente, oferece um MOOC sobre Escrita Científica para a comunidade acadêmica. Esse sistema faz parte do projeto integrador de quatro acadêmicas do curso técnico em Informática do Instituto Federal do Pará - Campus Santarém. O projeto tem como objetivo ensinar a escrita científica de forma atrativa e divertida para auxiliar os acadêmicos com dificuldades em realizar trabalhos de cunho científico. </p>
                        
                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-6">
                    <div class="about_tutorials">
                        <div class="courses">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <h1 style="color: white;">IFPA</h1>
                                </div>
                            </div>
                        </div>
                        <div class="courses-blue">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <p> Informática</p>
                                    <span>2017</span>
                                </div>

                            </div>
                        </div>
                        <div class="courses-sky">
                            <div class="inner_courses">
                                <div class="text_info">
                                    <h1 style="color: white;">Alexandria</h1>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- our_team_member_start -->
    <div class="our_team_member">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="img/team/aline.jpg" alt="Aline" style="width:250px;height:250px;">
                            <div class="social_link">
                                <i style="font-size: 13px;" class="fa fa-envelope"> motapereiralopesalinepriscila@gmail.com</i>  
                            </div>
                        </div>
                        <div class="master_name text-center">
                            <h3>Aline Lopes</h3>
                            <p>Analista de Mercado</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="img/team/sarah.jpg" alt="Sarah" style="width:250px;height:250px;">
                            <div class="social_link">
                                <i style="font-size: 17px;" class="fa fa-envelope"> sarah616stm@gmail.com
                                </i>
                            </div>
                        </div>
                        <div class="master_name text-center">
                            <h3>Sarah Souza</h3>
                            <p>CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="img/savia.jpg" alt="Sávia" style="width:250px;height:250px;">
                            <div class="social_link">
                                <i style="font-size: 17px;" class="fa fa-envelope"> saviasilvaa@gmail.com
                                </i>
                            </div>
                        </div>
                        <div class="master_name text-center">
                            <h3>Sávia Almeida</h3>
                            <p>Analista de Sistemas / 
                                Desenvolvedora</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="single_team">
                        <div class="thumb">
                            <img src="img/team/stephane.jpg" alt="Stephane" style="width:250px;height:250px;">
                            <div class="social_link">
                                <i style="font-size: 17px;" class="fa fa-envelope"> StephaneLeonara@gmail.com
                                </i>
                            </div>
                        </div>
                        <div class="master_name text-center">
                            <h3>Stephane Noronha</h3>
                            <p>Desenvolvedora</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_team_member_end -->

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
    <form id="test-form" class="white-popup-block mfp-hide" method="post" action="login.php?page=about.php">
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