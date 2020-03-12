<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
if (isset($_SESSION['nomeUsuario'])) {
    $loginUser = $_SESSION['nomeUsuario'];
}
?>
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="css/style.css">


    </head>

    <body>

        <!-- navbar-start -->

        <?php include 'navbar.php' ?>

        <!-- navbar-ends -->

        <!-- slider_area_start -->
        <div class="slider_area ">
            <div class="single_slider">
                <?php include 'slider/slider.php' ?>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.js"></script>
        <script src="https://use.fontawesome.com/188494abaf.js"></script>
    </body>

</html>