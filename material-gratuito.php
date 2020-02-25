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
    <title>Material Gratuito - Alexandria</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="/alexandria/img/alexandria-logo.jpeg">
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
                         <?php include 'navbar.php' ?>
    <!-- header-end -->

        <!-- bradcam_area_start -->
        <div class="bradcam_area breadcam_bg overlay2">
            <h3>Material Gratuito</h3>
        </div>
        <!-- bradcam_area_end -->


        <!--================Blog Area =================-->
        <section class="blog_area section-padding">

            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title text-center mb-100">
                            <h2>PRECISA DE UM MATERIAL SOBRE RESUMO GRATUITO?</h2>
                            <p>Basta preencher o formulário abaixo para acessá-lo e recebê-lo em seu e-mail.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Landing Page -->
                <!-- Begin Mailchimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                <style type="text/css">
                  #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
    /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
    We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
    <form action="https://gmail.us20.list-manage.com/subscribe/post?u=07af428939512d4ecffc7d1f0&amp;id=f91ea7c34e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      <div id="mc_embed_signup_scroll">
        <div class="indicates-required"><span class="asterisk">*</span> indica necessário</div>
        <div class="mc-field-group">
          <label for="mce-EMAIL">E-mail<span class="asterisk">*</span></label>
          <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
      </div>
      <div class="mc-field-group">
          <label for="mce-FNAME">Nome </label>
          <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
      </div>
      <div class="mc-field-group">
          <label for="mce-LNAME">Último Nome</label>
          <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
      </div>
      <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
      </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_07af428939512d4ecffc7d1f0_f91ea7c34e" tabindex="-1" value=""></div>
      <div class="clear">
          <center><input type="submit" style="width: 20%; background-color: #4682b4; color: white; padding: 14px 20px; margin: 8px 0; border: none; 
          border-radius: 4px; cursor: pointer;" value="Receber material" name="subscribe" id="mc-embedded-subscribe" ></center>
      </div>

  </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
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