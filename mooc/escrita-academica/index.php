<?php
session_start();
if (isset($_SESSION['nomeUsuario'])) {
    $loginUser = $_SESSION['nomeUsuario'];
}

if (isset($_SESSION['temCartao'])) {
    $PayUser = $_SESSION['temCartao'];
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Escrita Acadêmica - Alexandria</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="manifest" href="site.webmanifest"> -->
        <link rel="shortcut icon" type="image/x-icon" href="/alexandria/img/alexandria-logo.jpeg">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS here -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="../../css/style.css">
        <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    </head>

    <body>
        <!-- header-start -->

        <?php include '../../navbar.php'; ?>
        <!-- header-end -->

        <!-- bradcam_area_start -->
        <div class="courses_details_banner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="course_text">
                            <h3>Escrita Acadêmica <br></h3>
                            <div class="prise">
                            </div>
                            <div class="hours">
                                <div class="video">
                                    <div class="single_video">
                                        <i class="fa fa-clock-o"></i> <span>2 Horas</span>
                                    </div>
                                    <div class="single_video">
                                        <i class="fa fa-play-circle-o"></i> <span>12 Vídeos</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- bradcam_area_end -->

        <div class="courses_details_info">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="single_courses">
                            <h3 style="color: #04D2C8;">Objetivo</h3>
                            <div style="text-align: justify;" >
                                <p  style="color: #777777; line-height: 26px;">Já se perguntou como são feitos trabalhos acadêmicos de alta qualidade?
                                    Neste curso, resolveremos juntos o problema de desenvolver trabalhos acadêmicos que está causando estresse, dor de cabeça e desconforto na sua vida acadêmica. O MOOC de escrita acadêmica foi desenvolvido para que fosse facilmente assimilado por iniciantes. Está repleto de materiais e exemplos de trabalhos acadêmicos.
                                    Adequado para acadêmicos iniciantes, através deste curso que contém 4 módulos e 2 horas de conteúdo, você aprenderá o fundamento básico da escrita acadêmica e estabelecerá um forte entendimento do conceito por trás dos gêneros e estilos acadêmicos. No fim do curso, você será capaz de desenvolver seus trabalhos com grande facilidade. 
                                </p>
                            </div>
                            <h3 class="second_title" style="color: #04D2C8;">Roteiro do Curso</h3>
                        </div>
                        <div class="outline_courses_info">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Aprendendo a aprender</button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div style=" padding: 1px 30px; color: #777777;">
                                            Neste módulo você irá aprender técnicas para leitura de textos, técnicas de estudo e como se organizar.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Aprender a apreender o conhecimento</button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                        <div style=" padding: 1px 30px;color: #777777;">
                                            Neste módulo você irá aprender a produzir alguns tipos de textos acadêmicos como: resumo, fichamento, resenha, relatório e artigo.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Aprendendo a sistematizar o que aprendeu
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div style=" padding: 1px 30px;color: #777777;">
                                            Neste módulo você irá aprender as estruturas de textos científicos, como fazer citações, métodos científicos e tipos de pesquisa.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="heading_4">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse_4" aria-expanded="false" aria-controls="collapse_4">Conhecendo outros recursos</button>
                                        </h5>
                                    </div>
                                    <div id="collapse_4" class="collapse" aria-labelledby="heading_4" data-parent="#accordion">
                                        <div style=" padding: 1px 30px;color: #777777;">
                                            Neste módulo extra você irá conhecer outros recursos como aspas e parênteses, e algumas ferramentas que podem ser usadas (fontes confiáveis e não confiáveis).
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="courses_sidebar">
                            <div class="video_thumb">
                                <img src="img/imageCurso.png" alt="">   
                            </div>
                            <div class="author_info">
                                <center><table id="customers">
                                        <tr>
                                            <td>CH:</td>
                                            <td>2 Horas</td>
                                        </tr>
                                        <tr>
                                            <td>Nível:</td>
                                            <td>Iniciante</td>
                                        </tr>
                                        <tr>
                                            <td>Idioma:</td>
                                            <td>Português</td>
                                        </tr>
                                        <tr>
                                            <td>Preço: </td>
                                            <td>R$</td>
                                        </tr>
                                    </table></center>
                            </div>
                            <?php
                            if (isset($loginUser)) {
                                if (isset($_SESSION['temcartao']) && strcmp($_SESSION['temcartao'], "1") == 0) {
                                    echo "<a href='aula'>
                        <span class='boxed_btn'>Comece aprender</span>
                        </a>";
                                } else {
                                    echo "<a href='pay'>
                    <span class='boxed_btn'>Compre Agora!</span>
                    </a>";
                                }
                            } else {
                                echo
                                "<div class='live_chat_btn'>
                   <a data-toggle='modal' data-target='#modalLogin' class=''>
                   <span style='background-color: #FDAE5C;' class='boxed_btn'>Entrar</span></a>
                   </div>";
                            }
                            ?>  
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-3">
                            <div class="footer_widget">
                                <h3 class="footer_title">
                                    Redes Sociais
                                </h3>
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