<?php 
session_start();
if(isset($_SESSION['nomeUsuario'])){
    $loginUser = $_SESSION['nomeUsuario'];
}

if(isset($_SESSION['temCartao'])){
    $PayUser = $_SESSION['temCartao']; 
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
                         <?php include 'navbar2.php' ?>
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
                    <p  style="color: black;">Já se perguntou como são feitos trabalhos acadêmicos de alta qualidade?</p>
                    <p style="color: black;">Neste curso, resolveremos juntos o problema de desenvolver trabalhos acadêmicos que está causando estresse, dor de cabeça e desconforto na sua vida acadêmica. O MOOC de escrita acadêmica foi desenvolvido para que fosse facilmente assimilado por iniciantes. Está repleto de materiais e exemplos de trabalhos acadêmicos.
                    </p>
                    <p style="color: black;"> Adequado para acadêmicos iniciantes, através deste curso que contém 4 módulos e 12 horas de conteúdo, você aprenderá o fundamento básico da escrita acadêmica e estabelecerá um forte entendimento do conceito por trás dos gêneros e estilos acadêmicos. No fim do curso, você será capaz de desenvolver seus trabalhos com grande facilidade. </p>
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
                                <div style=" padding: 1px 30px;">
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
                                <div style=" padding: 1px 30px;">
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
                            <div style=" padding: 1px 30px;">
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
                            <div style=" padding: 1px 30px;">
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
                            <th>CH:</th>
                            <td>2 Horas</td>
                        </tr>
                        <tr>
                            <th>Nível:</th>
                            <td>Iniciante</td>
                        </tr>
                        <tr>
                            <th>Idioma:</th>
                            <td>Português</td>
                        </tr>
                        <tr>
                            <th>Preço: </th>
                            <td>R$</td>
                        </tr>
                    </table></center>
                </div>
                <?php 
                if (isset($loginUser)) {
                    if(isset($_SESSION['temcartao']) && strcmp($_SESSION['temcartao'],"1") == 0){
                        echo "<a href='aula.php'>
                        <span class='boxed_btn'>Comece aprender</span>
                        </a>";
                        
                    } else {
                        echo "<a href='pay.php'>
                    <span class='boxed_btn'>Compre Agora!</span>
                    </a>";
                    }
                    
                }else{
                   echo 
                   "<div class='live_chat_btn'>
                   <a href='#test-form2' class='login popup-with-form'>
                   <span style='background-color: #FDAE5C;' class='boxed_btn'>Cadastre-se</span></a>
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
<form id="test-form" class="white-popup-block mfp-hide" method="post" action="login.php?page=index.php">
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
<?php
if($con){
  mysqli_close($con);
}
?>