<?php
session_start();
if (isset($_SESSION['nomeUsuario'])) {

    $loginUser = $_SESSION['nomeUsuario'];
}

if (strcmp($_SESSION['statusPagamento'], "1") == 0) {
    $pagou = $_SESSION['statusPagamento'];
} else {
    if (!$_SESSION) {
        header("Location: ../../acessNegado.php");
    } else {
        if (!strcmp($_SESSION['login'], "ok") == 0) {
            header("Location: ../../acessNegado.php");
        }
    }
}

if ($_GET && isset($_GET['modulo'])) {
    $modulo = $_GET['modulo'];
    if ($modulo > 2) {
        echo "<script type='text/javascript'>
        alert('Este módulo ainda encontra-se bloqueado');
        </script>"
        ;
        header("Location: aula.php?modulo=1");
    }
} else {
    $modulo = 1;
}

require_once ("../../conexao.php");


if ($connection) {
    $qua = mysqli_num_rows(mysqli_query($connection, "select * from video where modulo_idModulo = $modulo"));
    $sql = "SELECT * FROM `videos` where modulo_idModulo = $modulo order by video_id_video";
    $query = mysqli_query($connection, $sql);
    //quatidade de registros retornados pelo select
    $quantLinha = mysqli_num_rows($query);

    $sql1 = "SELECT * FROM `audio` where modulo_idModulo = $modulo";
    $query1 = mysqli_query($connection, $sql1);
}
?>      



<!doctype html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Curso - Alexandria</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.plyr.io/3.5.10/plyr.css" />
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/slicknav.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    </head>

    <body>
        <script>

        </script>
        <!-- header-start -->

        <?php include 'navbar2.php' ?>
        <!-- header-end -->

        <!-- bradcam_area_start -->
        <div style="background-color: #4682b4; padding:28px">
            <h3>Material Gratuito</h3>
        </div>
        <!-- bradcam_area_end -->


        <div id="bloqueadoModal" class="modal modal-message fade" role="dialog">
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


        <!--================Blog Area =================-->
        <section style="background-color:rgb(240, 240, 240);" class="blog_area section-padding">
            <div class="container">
                <div class="section_title mb-100">
                    <figure id="video_playlist" >
                        <div class="row">
                            <div class="col-xl-3 col-lg-3" style="padding: 60px 50px;">
                                <ul>
                                    <?php
                                    $queryModulo = mysqli_query($connection, "select * from modulo");
                                    while ($fetchModulo = mysqli_fetch_array($queryModulo)) {
                                        echo '<li><button onclick="window.location.href = \'aula.php?modulo=' . $fetchModulo['idModulo'] . '\'" id ="modulo' . $fetchModulo['idModulo'] . '" class="boxed_btn" style=" color: black; width:220px; border-radius: 0px; padding: 10px 25px;';
                                        if ($modulo == $fetchModulo['idModulo']) {
                                            echo 'color: white;';
                                        } echo '">' . $fetchModulo['nome'] . '</button></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <figcaption>
                                    <ul style="background-color: #04D2C8;">
                                        <li>    
                                            <fieldset  style="border-width: 0;" >
                                                <?php
                                                for ($i = 1; $i <= $qua; $i++) {
                                                    if ($i == 1) {
                                                        echo "<img style='margin: 6px 6px 6px 6px;' id='aula$i' src='img/iconVideoSelec.png' width='30' height='30' title='Aula $i' alt='videoAula'>";
                                                    } else {
                                                        echo "<img style='margin: 6px 6px 6px 6px;' id='aula$i' src='img/iconVideo.png' width='30' height='30' title='Aula $i' alt='videoAula'>";
                                                    }
                                                }
                                                ?>

                                                <img style="margin: 6px 6px 6px 6px;" id="podcastM1" src="img/iconAudio.png" width="30" height="30" title="Resumo do Módulo"alt="podcast">
                                                <img style="margin: 6px 6px 6px 6px;" id="questionario" src="img/iconQuiz.png" width="30" height="30" title="Atividade" alt="quiz">
                                            </fieldset>
                                        </li>
                                    </ul>
                                </figcaption>
                                <div id="idvideo" style="margin: 20px 6px;">
                                    <video id="player" playsinline controls style="width: 100%; height: 100%;" src="">
                                    </video>
                                    <!--<iframe width="100%" height="400" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="ifrma_video1">jnerjgnjn</iframe>-->
                                </div>

                                <div id="divplayeraudio" style="margin: 20px 6px;">
                                    <audio id="playeraudio" controls>
                                        <source src="http://dl71.y2mate.com/?file=M3R4SUNiN3JsOHJ6WWQ2a3NQS1Y5ZGlxVlZIOCtyZ1F0L3NmOUZzQ0w0OEhqOFppbk1DQkRlcHFaWW9nNDZHSEtKVVJwMmIzVi9haUV5YW9tdE1RYTFlazJKTnY0QURlbzRZNVlQNWFiakNvcXFpdWhtSXdqdzc1ZStmZEZLeGVNRElwaFZsc3hqS0d6dlNSNnpQMW95N285V3ZRS1hZc3Eya0dQT0hWdjV4SDJDS0dKT1ByM1pVV2tpZVI1cVZBNWZTY3VnTHovTDh4dHRkd1IzdDdkWlpVMnBQMDA4L2FyRU1jajZZTmlrVzlrTldOUHJobExldVRhV1EyUFM0QTdPSDdkU3REbm5aUHRqdnN1UFo5b0RkZE42VnQrR3VtL09iZ2F6ckZMNWV1SGNuVmZMemw4b1BxOUtSeXFSST0%3D" type="audio/mp3" />
                                    </audio>
                                </div>
                                <div>
                                    <button style=" background-color: #04D2C8;" id="btn_video" 
                                            onclick="anteriorVideo();"; > Anterior</button>
                                    <button style="margin: 6px 10px; background-color: #04D2C8;" id="btn_video"
                                            onclick="avancarVideo();"> Avançar</button>
                                </div>
                                <br><br>
                                <h3 style="margin: 1px 1px 1px 10px;">Materiais Adicionais</h3>
                                <a style="margin: 20px 1px 1px 10px;" href="https://bit.ly/2BjRFR1" 
                                   target="_blank" class="boxed_btn" >Download de Apostila</a>                
                            </div>
                        </div>
                    </figure>
                </div>
            </div>   
        </section>


        <!--================Blog Area =================-->


        <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe src="../../questionario/questionario1.php" ></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
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

        <!-- JS here -->
        <script type="text/javascript">primeiraCoisa();</script>
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

        <script src="js/main.js"></script>    </footer>
    <!-- footer -->
    <script type="text/javascript">


            var audio = [<?php
                                                while ($mostraAudio = mysqli_fetch_array($query1)) {
                                                    echo "\"$mostraAudio[1]\"";
                                                }
                                                ?>];


            var videoAtual = 0;
            //cria um vetor
            var videosVetor = [<?php
                                                //quantidade de voltas do while
                                                $loop = 0;
                                                $lastVideo = -1;

                                                while ($mostraVideo = mysqli_fetch_array($query)) {
                                                    //adiciona um a cada volta do while
                                                    $loop++;

                                                    if ($loop == 1) {
                                                        echo "\"";
                                                    } else
                                                    if ($lastVideo != $mostraVideo[3]) {
                                                        echo '","';
                                                    }
                                                    echo "<source src='$mostraVideo[1]' type='video/mp4' size='$mostraVideo[2]'/>";
                                                    if ($quantLinha == $loop) {
                                                        echo "\"";
                                                    }

                                                    $lastVideo = $mostraVideo[3];
                                                }
                                                ?>];
            var videosVetorSRC = [<?php
                                                $sql = "SELECT * FROM `videos` where modulo_idModulo = $modulo order by video_id_video";
                                                $query = mysqli_query($connection, $sql);
                                                //quantidade de voltas do while
                                                $loop = 0;
                                                $lastVideo = -1;

                                                while ($mostraVideo = mysqli_fetch_array($query)) {
                                                    //adiciona um a cada volta do while
                                                    $loop++;

                                                    if ($loop == 1) {
                                                        echo "\"";
                                                        echo "$mostraVideo[1]";
                                                    } else
                                                    if ($lastVideo != $mostraVideo[3]) {
                                                        echo '","';
                                                        echo "$mostraVideo[1]";
                                                    }

                                                    if ($quantLinha == $loop) {
                                                        echo "\"";
                                                    }

                                                    $lastVideo = $mostraVideo[3];
                                                }
                                                ?>];


            function bloqueado() {
                alert("Este módulo ainda encontra-se bloqueado");
            }

            function alteraImagem() {
                //alert(videoAtual);
                desativarTodos();
<?php
for ($i = 0; $i < $qua; $i++) {
    echo "if(videoAtual == $i && videoAtual < $qua){
                            aula" . ($i + 1) . "();
                        }
                        ";
}
?>
            }

            function avancarVideo() {
                if ((videoAtual + 1) < <?php echo "$qua"; ?>) {
                    var botaoVideo = document.getElementById("player");
                    botaoVideo.innerHTML = (videosVetor[videoAtual + 1]);
                    botaoVideo.src = (videosVetorSRC[videoAtual + 1]);
                    $('#divplayeraudio').hide();
                    $('#idvideo').show();
                    videoAtual++;
                    alteraImagem();
                } else {
                    if ((videoAtual + 1) == <?php echo "$qua"; ?>) {
                        //alert("audio" + videoAtual + '<?php echo "$qua"; ?>');

                        $('#divplayeraudio').show();
                        $('#idvideo').hide();
                        videoAtual++;
                        //alert("audio" + videoAtual + '<?php echo "$qua"; ?>');
                        podcastM1();
                    } else if (videoAtual == <?php echo "$qua"; ?>) {
                        //alert("questionario");
                        videoAtual++;
                        $("#modalForm").modal();
                        //var botaoVideo = document.getElementById("ifrma_video1");
                        //botaoVideo.src = "../../questionario/questionario<?php echo $modulo; ?>.php";
                        questionario();
                    }
                }

            }
            function anteriorVideo() {
                if (videoAtual >= 1 && videoAtual <= <?php echo "$qua"; ?>) {
                    var botaoVideo = document.getElementById("player");
                    botaoVideo.innerHTML = (videosVetor[videoAtual - 1]);
                    botaoVideo.src = (videosVetorSRC[videoAtual - 1]);
                    videoAtual--;
                    $('#divplayeraudio').hide();
                    $('#idvideo').show();
                    alteraImagem();
                } else if (videoAtual > <?php echo "$qua"; ?>) {
                    //alert("audio");
                    //var botaoVideo = document.getElementById("ifrma_video1");
                    //botaoVideo.src = audio + "";
                    $('#divplayeraudio').show();
                    $('#idvideo').hide();
                    videoAtual--;
                    podcastM1();
                }
            }

<?php
for ($i = 1; $i <= $qua; $i++) {
    echo "function aula$i(){
                            desativarTodos();
                            var aula = document.getElementById('aula$i');
                            aula.src = 'img/iconVideoSelec.png';
                        }
            ";
}
?>

            function podcastM1() {
                desativarTodos();
                var podcastM1 = document.getElementById("podcastM1");
                podcastM1.src = "img/iconAudioSelec.png";
            }


            function questionario() {
                desativarTodos();
                var quiz = document.getElementById("questionario");
                quiz.src = "img/iconQuizSelec.png";
            }


            function desativarTodos() {
<?php
for ($i = 1; $i <= $qua; $i++) {
    echo "var aula$i = document.getElementById('aula$i');
                            aula$i.src = 'img/iconVideo.png';
                        ";
}
?>

                var podcastM1 = document.getElementById("podcastM1");
                podcastM1.src = "img/iconAudio.png";

                var quiz = document.getElementById("questionario");
                quiz.src = "img/iconQuiz.png";
            }

    </script>

    <script>

        document.getElementById("player").innerHTML = videosVetor[0];
        $(document).ready(function () {
            $('#divplayeraudio').hide();
        });

    </script>

    <script src="https://cdn.plyr.io/3.5.10/plyr.js"></script>
    <script>
        const player = new Plyr('#player');
        const playeraudio = new Plyr('#playeraudio');
    </script>
</body>
</html>