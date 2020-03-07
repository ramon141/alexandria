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
        <title>Banco de Dados - Alexandria</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="manifest" href="site.webmanifest"> -->
        <link rel="shortcut icon" type="image/x-icon" href="img/alexandria-logo.jpeg">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS here -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    </head>

    <body>
        <?php include 'navbar.php' ?>

        <!-- header-end -->

        <!-- bradcam_area_start -->
        <div class="bradcam_area breadcam_bg overlay2">
            <h3>Banco de Dados</h3>
        </div>
        <!-- bradcam_area_end -->


        <!--================Blog Area =================-->
        <section class="blog_area section-padding">

            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title mb-100">
                            <div >

                                <ul>
                                    <li>
                                        <h4><strong>INTRODUÇÃO AO PROJETO DE BANCO DE DADOS</strong></h4>
                                    </li>
                                </ul>

                                <p align="justify">O projeto de banco de dados do sistema Alexandria foi feito nas três fases da modelagem: modelo conceitual, modelo lógico e modelo físico.

                                    Na primeira etapa, foi feito a modelagem conceitual do sistema, que permitiu fazer uma prévia descrição do sistema de como se parece, comporta e o que faz, assim gerando um modelo simples que se possa compreender pelo usuário. Definindo as  entidades, seus respectivos atributos e os relacionamentos. 

                                    Na segunda etapa, foi feita a modelagem lógica, que descreve como os dados serão armazenados no banco e, também, seus relacionamentos.  O modelo lógico implementa com as adequações padrões de nomenclatura, define as chaves primárias e estrangeiras, normalização, entre outras.

                                    Na terceira etapa, foi feita a modelagem física, que levou em conta as limitações impostas pelo SGBD (Sistema Gerenciador de Bancos de Dados) escolhido e foi criado com base nos exemplos de modelagem de dados produzidos no modelo lógico.</p><br>
                                <li>
                                    <h4><strong>MODELO CONCEITUAL</strong></h4>
                                </li>

                                <li>
                                    <h4><strong>MODELO LÓGICO</strong></h4>
                                </li>
                                <li>
                                    <h4><strong>MODELO FÍSICO</strong></h4>
                                </li>

                            </div>
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