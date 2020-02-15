<?php
header('Content-Type: text/html; charset=utf-8');
$quatRespostas = 0;
session_start();
if (isset($_SESSION['nomeUsuario'])) {
    $loginUser = $_SESSION['nomeUsuario'];
}
require_once ("../../conexao.php");
if ($_POST && isset($_POST['pesq'])) {
    $pesq = $_POST['pesq'];

    $query = mysqli_query($connection, "select * from vforumcomresposta where pergunta like '%$pesq%' or respostaTopico like '%$pesq%' or nomeTopico = '%$pesq%'");
    $quatRespostas = mysqli_num_rows($query);
    $query11 = mysqli_query($connection, "select * from vforumsemresposta where pergunta LIKE '%$pesq%' or nomeTopico LIKE '%$pesq%'");
    $quatRespostas = $quatRespostas + mysqli_num_rows($query11);
} else {
    $query = mysqli_query($connection, "select * from vforumcomresposta limit 10");
}
if ($_GET && isset($_GET['id'])) {
    $idTopico = $_GET['id'];
} else {
    $idTopico = 1;
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
        <div class="bradcam_area breadcam_bg overlay2">
            <h3>Fórum</h3>
        </div>
        <!-- bradcam_area_end -->


        <?php
        if ($_GET && isset($_GET['m'])) {
            if (strcmp($_GET['m'], "1") == 0) {
                echo "<h2 style='float: left; margin-left: 30%;' >Seu tópico foi cadastrado com sucesso!</h2>";
            } else {
                echo "<h2 style='float: left; margin-left: 36%;' >Erro ao cadastrar tópico:(<br>Tente mais tarde</h2>";
            }
        }
        ?>

        <?php
        if ($_POST && isset($_POST['pesq'])) {
            echo "<h2 style='float: left; margin-left: 30%;' >$quatRespostas resultados encontrados para \"$pesq\"</h2>";
        }
        ?>


        <div class="courses_details_info">
            <div class="container">
                <div class="outline_courses_info">
                    <form action="forum.php" method="post">
                        <h1 class="single_courses">
                            <div class="input-group mb-3">Tópicos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text"  class="form-control" name="pesq" style="height: 50px;" placeholder="Digite o que deseja" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Buscar</button>
                                </div>
                            </div>
                        </h1></form>    

                    <br>
                </div>
                <div>    
                    <?php
                    while ($fetch = mysqli_fetch_array($query)) {
                        echo "<h4 style='color: #04D2C8;'><a href='forum.php?id=$fetch[0]'>$fetch[1] [RESPONDIDO]</a></h4>";
                    }
                    if (isset($query11)) {
                        while ($fetch1 = mysqli_fetch_array($query11)) {
                            echo "<h4 style='color: #04D2C8;'><a href='forum.php?id=$fetch1[0]'>$fetch1[1]</a></h4>";
                        }
                    }
                    $query = mysqli_query($connection, "select * from vforumcomresposta where idTopico = $idTopico");
                    ?>

                </div>
                <br><br>
                <hr>
                <div>
                    <?php
                    if ($quatRespostas > 0) {
                        echo "<h2>RESPOSTAS</h2>";


                        if (mysqli_num_rows($query) > 0) {
                            while ($fetch = mysqli_fetch_array($query)) {
                                echo "<div>
							<label style='color: black;' for=''>Tópico: $fetch[1]</label><br>
							Descrição: $fetch[2]
							<label style='color: #4682b4;' for=''>Postado: $fetch[3]</label>
							<br>
							<p style='color: #4682b4; margin: 10px 30px;'> Resposta Alexandria: <span style='color: black;'>" . $fetch['respostaTopico'] . "</span> </p>
							</div><br>";
                            }
                        } else {
                            $query123 = mysqli_query($connection, "select * from vforumsemresposta where idTopico = '$idTopico'");
                            while ($fetch5 = mysqli_fetch_array($query123)) {
                                echo "<div>
							<label style='color: black;' for=''>Tópico: $fetch5[1]</label><br>
							Descrição: $fetch[2]
							<label style='color: #4682b4;' for=''>Postado: $fetch5[3]</label>
							<br>
							<p style='color: #4682b4; margin: 10px 30px;'> Resposta Alexandria: <span style='color: black;'>Este tópico ainda não possui resposta😥😰</span> </p>
							</div><br>";
                            }
                        }
                    }
                    ?>
                    <br>
                </div>
                <br><br>
                <div>
                    <h3>Tire sua dúvida</h3>
                    <form action="addTopico.php" method="POST">
                        <div class="form-group">
                            <label style="color: #4682b4;" for="textinput">Nome do Tópico</label>  
                            <input style="width: 50%;" id="nomeTopic" name="nomeTopico" type="text" placeholder="Nome" class="form-control input-md">
                        </div>
                        <div class="form-group">
                            <label style="color: #4682b4;" for="textarea">Descreva sua pergunta</label>
                            <textarea style="width: 50%;" class="form-control" id="textarea" name="areaDescricao" placeholder="Tente ser o mais objetivo possível" input></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" style="width: 20%; background-color: #4682b4;" id="btPubli" name="btPublicar" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
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