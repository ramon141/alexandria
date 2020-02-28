<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
if (isset($_SESSION['nomeUsuario'])) {
    $loginUser = $_SESSION['nomeUsuario'];
}
?>
<html>
    <head>
        
    </head>
    <body id="primeiroBody">
    </body>
</html>

<!doctype html>
<html class="no-js" lang="zxx">

    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->


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
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/themify-icons.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/gijgo.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/slicknav.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- <link rel="stylesheet" href="css/responsive.css"> -->
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


    </head>

    <body>

    <!-- navbar-start -->

    <?php include 'navbar.php' ?>

    <!-- navbar-ends -->

    <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="illastrator_png">
                            <img src="img/banner/figureAlexan.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_info">
                            <h3> Bem-vindo<br>
                                ao Alexandria!<br></h3>
                            <a href="about" class="boxed_btn">Conheça nosso MOOC!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="single_about_info">
                        <h3>Alexandria</h3>
                        <p align="justify">O Alexandria é um sistema que, inicialmente, oferece um MOOC sobre Escrita Científica para a comunidade acadêmica. Esse sistema faz parte do projeto integrador de quatro acadêmicas do curso técnico em Informática do Instituto Federal do Pará - Campus Santarém.</p>
                        <a href="about" class="boxed_btn">Saiba Mais!</a>
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

    <!-- our_latest_blog_start -->
    <div class="our_latest_blog">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3 style="color: #4682b4">Últimas Postagens</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog">
                        <div class="thumb">
                            <img src="img/latest_blog/resumo.jpg" alt="">
                        </div>
                        <center><div class="content_blog">
                                <div class="date">
                                    <p>18 de out de 2019</p>
                                </div>
                                <div class="blog_meta">
                                    <h3><a href="material-gratuito">Tipos de Resumos</a></h3>
                                </div>
                            </div></center>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog">
                        <div class="thumb">
                            <img src="img/latest_blog/analise.jpg" alt="">
                        </div>
                        <center><div class="content_blog">
                                <div class="date">
                                    <p>11 de out de 2019</p>
                                </div>
                                <div class="blog_meta">
                                    <h3><a href="analise">Análise de Sistemas</a></h3>
                                </div>
                            </div></center>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_latest_blog">
                        <div class="thumb">
                            <img src="img/latest_blog/banco.jpg" alt="">
                        </div>
                        <center><div class="content_blog">
                                <div class="date">
                                    <p>11 de out de 2019</p>
                                </div>
                                <div class="blog_meta">
                                    <h3><a href="bd">Banco de Dados</a></h3>
                                </div>
                            </div></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_latest_blog_end -->


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