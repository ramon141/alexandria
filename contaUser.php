<?php 
session_start();
if(isset($_SESSION['nomeUsuario'])){
    $loginUser = $_SESSION['nomeUsuario'];
}
if(isset($_SESSION['emailUsuario'])){
    $emailUser = $_SESSION ['emailUsuario'];
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
    <div style="background-color: #4682b4; padding:28px">
        <h3>Material Gratuito</h3>
    </div>
    <!-- bradcam_area_end -->


    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-100">
                        <fieldset style="width:70%;">
                            <form method="POST" action="pagamento.php">
                                <br> 
                                <h2>Informações de Perfil</h2> <br>
                                <label style= "color: #4682b4;" for="lname">E-mail</label>
                                <?php 
                                echo "
                                <input type='text' class='form-control input-lg' placeholder='$emailUser' name='email'>";
                                ?> 
                                <br>
                                <label style= "color: #4682b4;" for="lname">Senha</label>  
                                <input type="password" class="form-control input-lg" placeholder="Senha atual" name="senhaAtual">
                                <br>
                                <label style= "color: #4682b4;" for="lname">Nova Senha</label>  
                                <input type="password" class="form-control input-lg" placeholder="Nova senha" name="senhaNova">
                                <br>
                                <label style= "color: #4682b4;" for="lname">Confirmar Senha</label>
                                <input type="password" class="form-control input-lg" placeholder="Nova senha" name="confirmarSenha">  
                                <br>
                                <center>
                                    <input style="width:25%; background-color: #4682b4; color: white; padding: 14px 20px;  border: none; border-radius: 4px; cursor: pointer;" type="submit" 
                                    value="Salvar alterações">
                                </center> 
                                <br><br>
                            </form>
                            <br> <h2>Excluir Conta</h2>
                            <p>Encerre sua conta permanentemente.</p> <br>
                            <p>Aviso: Se encerrar sua conta, você será descadastrado de seu curso e perderá o acesso para sempre.</p>
                            <a href="#confirmar" class="login popup-with-form">
                                <input style="width:25%; background-color: #4682b4; color: white; padding: 14px 20px; 
                                margin: 10px 5px 10px 1px; border: none; border-radius: 4px; cursor: pointer;" type="submit"name="nomeConf" value="Excluir Conta" >
                            </a>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->


    <!-- form itself end-->
    <form id="confirmar" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>Are u sure?</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-md-6 col-xs-6">

                            <div class="col-xl-12">
                                <button type="submit" class="boxed_btn_orange">Sim</button>
                                <button type="submit" class="boxed_btn_orange">Não</button>
                            </div>

                        </form>
                    </div>
                </div>
            </form>
            <!-- form itself end -->

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