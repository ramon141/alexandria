<?php
session_start();
if(!$_SESSION){
            header("Location: acessNegado.php");
    } else {
        if(!strcmp($_SESSION['login'], "ok") == 0){
            header("Location: acessNegado.php");
        }
    }
if (isset($_SESSION['nomeUsuario'])) {
    $loginUser = $_SESSION['nomeUsuario'];
    $sobrenomeUser = $_SESSION['sobrenomeUsuario'];
}
if (isset($_SESSION['emailUsuario'])) {
    $emailUser = $_SESSION ['emailUsuario'];
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Configurações da Conta - Alexandria</title>
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

                            <?php include 'navbar.php' ?>


        <!--================Blog Area =================-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title mb-100">
                            <fieldset style="width:70%;">
                                <form method="POST" action="editDate.php">
                                    <br> 
                                    <h2>Informações de Perfil</h2> <span style="color: red;">*Qualquer campo não preenchido será mantida a informação anterior</span> <br>
                                    <br>
                                    <label style= "color: #4682b4;" for="lname">Nome</label>  
                                    <input type="text" class="form-control input-lg" placeholder="Digite seu nome" name="nomeNova" value="<?php echo $loginUser; ?>">
                                    <br>

                                    <label style= "color: #4682b4;" for="lname">Sobrenome</label>  
                                    <input type="text" class="form-control input-lg" placeholder="Digite seu sobrenome" name="sobrenomeNova" value="<?php echo $sobrenomeUser; ?>">
                                    <br>


                                    <label style= "color: #4682b4;" for="lname">E-mail</label>
                                    <?php
                                    echo "
                                <input type='text' class='form-control input-lg' placeholder='alexandria.curso@gmail.com' value='$emailUser' name='emailNova'>";
                                    ?> 
                                    <br>
                                    <label style= "color: #4682b4;" for="lname">Nova Senha</label>  
                                    <input type="password" class="form-control input-lg" placeholder="Nova senha" name="senhaNova" value="<?php echo $_SESSION['senhas'] ?>">
                                    <br>
                                    <label style= "color: #4682b4;" for="lname">Confirmar nova senha</label>
                                    <input type="password" class="form-control input-lg" placeholder="Nova senha" name="confirmarSenha" value="<?php echo $_SESSION['senhas'] ?>">
                                    <br>
                                    <center>
                                        <input style="width:25%; background-color: #4682b4; color: white; padding: 14px 20px;  border: none; border-radius: 4px; cursor: pointer;" type="submit" value="Salvar alterações">
                                    </center> 
                                    <br><br>
                                </form>
                                <br> <h2>Excluir Conta</h2>
                                <p>Encerre sua conta permanentemente.</p> <br>
                                <p>Aviso: Se encerrar sua conta, você será descadastrado de seu curso e perderá o acesso para sempre.</p>
                                <a href="editDate.php?m=d">
                                    <input  class="btn btn-danger" type="submit" name="nomeConf" value="Excluir Conta" >
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