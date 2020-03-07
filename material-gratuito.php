<?php
session_start();
if (isset($_SESSION['nomeUsuario'])) {
    $loginUser = $_SESSION['nomeUsuario'];
}
?>

<!doctype html>
<html lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Material Gratuito - Alexandria</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="manifest" href="site.webmanifest"> -->
        <link rel="shortcut icon" type="image/x-icon" href="/alexandria/img/alexandria-logo.jpeg">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- CSS here -->


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
                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function ($) {
        window.fnames = new Array();
        window.ftypes = new Array();
        fnames[0] = 'EMAIL';
        ftypes[0] = 'email';
        fnames[1] = 'FNAME';
        ftypes[1] = 'text';
        fnames[2] = 'LNAME';
        ftypes[2] = 'text';
        fnames[3] = 'ADDRESS';
        ftypes[3] = 'address';
        fnames[4] = 'PHONE';
        ftypes[4] = 'phone';
        fnames[5] = 'BIRTHDAY';
        ftypes[5] = 'birthday';
    }(jQuery));
    var $mcj = jQuery.noConflict(true);</script>
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

        <!-- form itself end -->

        <!-- form itself end -->
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