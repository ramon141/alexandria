<?php
session_start();
if (isset($_SESSION['nomeUsuario'])) {
    $loginUser = $_SESSION['nomeUsuario'];
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Análise de Sistemas - Alexandria</title>
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
        <!-- header-start -->

        <?php include 'navbar.php' ?>

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