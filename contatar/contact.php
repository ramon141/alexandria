<?php
    if($_GET){
            if(strcmp($_GET['sucesso'] ."", "1") == 0){
                    echo "<script src='//code.jquery.com/jquery-1.11.0.min.js'></script>
                              <script type='text/javascript' src='js/bootstrap.js'></script>
                              <script type='text/javascript'>
                              $(window).load(function() {
                                  $('#success').modal('show');
                              });
                              </script>";
            } else {
                echo "<script src='//code.jquery.com/jquery-1.11.0.min.js'></script>
                              <script type='text/javascript' src='js/bootstrap.js'></script>
                              <script type='text/javascript'>
                              $(window).load(function() {
                                  $('#error').modal('show');
                              });
                              </script>";
            }
    }
?>
<!doctype html>
<html lang="pt">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="/alexandria/img/alexandria-logo.jpeg" type="image/png">
        <title>Alexandria | Contate-nos</title>
        <!-- Bootstrap CSS -->
        
        <link rel="stylesheet" href="css/linericon/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <!--================Header Menu Area =================-->
        <?php require_once '../navbar.php'; ?><br><br><br><br>
        <!--================Header Menu Area =================-->

        <!--================Contact Area =================-->
        <section class="contact_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Pará, Brasil</h6>
                                <p>Santarém</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">(93) 9120-4052</a></h6>
                                <p>Seg a Sex, 07:00 às 22:00</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">alexandria.curso@gmail.com</a></h6>
                                <p>Envie-nos um email, a qualquer momento!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form class="row contact_form" action="sendMail" method="get" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="nome" placeholder="Insira seu nome">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Insira seu endereço de email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="assunto" placeholder="Insira o assunto">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">    
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Insira a mensagem"></textarea>
                                    <input name="para" value="r" type="hidden">
                                    <input name="page" value="<?=$_SERVER['REQUEST_URI'];?>" type="hidden">
                                    <input name="motivo" value="contato" type="hidden">
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="primary_btn">Enviar Mensagem</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->


        <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Obrigado!</h2>
                        <p>Sua mensagem foi enviada com sucesso...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Desculpe :(</h2>
                        <p>Algo deu Errado</p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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