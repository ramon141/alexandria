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
            <h3>Sobre nós</h3>
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
                <h3 style="font-size: 46px;">EQUIPE ALEXANDRIA</h3> <br>
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
                                <img src="img/team/savia.jpg" alt="Sávia" style="width:250px;height:250px;">
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

        <!-- star_MOOC -->
        <div class="our_team_member">
            <div class="container">
                <h3 style="font-size: 46px;">O que são MOOCs (Massive Open Online Courses)?</h3> <br>
                <p align="justify">Um curso on-line aberto maciço (MOOC) é um curso on-line destinado a participação interativa em larga escala e acesso aberto via web. Além dos materiais tradicionais do curso, como vídeos, leituras e conjuntos de problemas, os MOOCs oferecem fóruns interativos para usuários que ajudam a construir uma comunidade para estudantes, professores e assistentes de ensino (ATs). <p>
                <p align="justify"> Um MOOC é um curso on-line com a opção de inscrição gratuita e aberta, um currículo compartilhado publicamente e resultados em aberto. Os MOOCs integram redes sociais, recursos on-line acessíveis e são facilitados pelos principais profissionais no campo de estudo. Mais significativamente, os MOOCs se baseiam no envolvimento de alunos que auto-organizam sua participação de acordo com as metas de aprendizado, conhecimentos e habilidades anteriores e interesses comuns. </p>
            </div>
        </div>
        <!-- MOOC_end -->

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