<?php
session_start();
if (isset($_SESSION['nomeUsuario'])) {

    $loginUser = $_SESSION['nomeUsuario'];
}

if (strcmp($_SESSION['statusPagamento'], "1") == 0) {
    $pagou = $_SESSION['statusPagamento'];
} else {
    if (!$_SESSION) {
        header("Location: ../../acessNegado");
    } else {
        if (!strcmp($_SESSION['login'], "ok") == 0) {
            header("Location: ../../acessNegado");
        }
    }
}

if ($_GET && isset($_GET['modulo'])) {
    $modulo = $_GET['modulo'];
    if ($modulo > 2) {
        echo "<script type='text/javascript'>
        alert('Este módulo ainda encontra-se bloqueado');
        window.location.href = 'aula?modulo=1';
        </script>"
        ;
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

        <link rel="shortcut icon" type="image/x-icon" href="img/alexandria-logo.jpeg">

        <link rel="stylesheet" href="https://cdn.plyr.io/3.5.10/plyr.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="../../css/style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>

        <style>
            .modal-personalizado{
                min-width: 90%;
                margin-left: 10;
            }
        </style>
    </head>

    <body>
        <script>

        </script>
        <!-- header-start -->

        <?php include '../../navbar.php'; ?>
        <!-- header-end -->


        <!--================Blog Area =================-->

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-4" style="background-color: gray;">


                    <div style="color: white; font-weight: bold; font-size: 30px; background-color: #04D2C8" class="text-center">
                        <br>    
                        Módulos
                    </div>

                    <ul>
                        <?php
                        $queryModulo = mysqli_query($connection, "select * from modulo");
                        while ($fetchModulo = mysqli_fetch_array($queryModulo)) {
                            echo '<li ><button onclick="window.location.href = \'aula?modulo=' . $fetchModulo['idModulo'] . '\'" id ="modulo' . $fetchModulo['idModulo'] . '" class="boxed_btn" style=" color: black; background-color:#04D2C8; width:220px; border-radius: 0px; padding: 10px 25px; height:100px;';
                            if ($modulo == $fetchModulo['idModulo']) {
                                echo 'color: white;';
                            } echo '">' . $fetchModulo['nome'] . '</button></li>';
                        }
                        ?>

                    </ul>
                </div>
                <div style="width: 83.69%; height: 100%" >
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

                    <div id="idvideo" style="">
                        <!--style="width: 1129px; height: 478px"--> <!--para 1366x768-->
                        <video id="player" playsinline controls style="width: 100%; height: 100%" src="">
                        </video>
                    </div>

                    <div id="divplayeraudio" style="margin: 20px 6px;">
                        <audio id="playeraudio" controls>
                            <source src="http://dl71.y2mate.com/?file=M3R4SUNiN3JsOHJ6WWQ2a3NQS1Y5ZGlxVlZIOCtyZ1F0L3NmOUZzQ0w0OEhqOFppbk1DQkRlcHFaWW9nNDZHSEtKVVJwMmIzVi9haUV5YW9tdE1RYTFlazJKTnY0QURlbzRZNVlQNWFiakNvcXFpdWhtSXdqdzc1ZStmZEZLeGVNRElwaFZsc3hqS0d6dlNSNnpQMW95N285V3ZRS1hZc3Eya0dQT0hWdjV4SDJDS0dKT1ByM1pVV2tpZVI1cVZBNWZTY3VnTHovTDh4dHRkd1IzdDdkWlpVMnBQMDA4L2FyRU1jajZZTmlrVzlrTldOUHJobExldVRhV1EyUFM0QTdPSDdkU3REbm5aUHRqdnN1UFo5b0RkZE42VnQrR3VtL09iZ2F6ckZMNWV1SGNuVmZMemw4b1BxOUtSeXFSST0%3D" type="audio/mp3" />
                        </audio>
                    </div>
                    <div id="btnModal" class="text-center"
                         <br><br>
                        <h3 style="margin: 20px 1px 1px 10px;">Materiais Adicionais</h3>

                        <?php
                        $queryApostilas = mysqli_query($connection, "SELECT * FROM `apostila` where modulo_idModulo = '$modulo'");
                        while ($fetchApostilas = mysqli_fetch_array($queryApostilas)) {
                            echo '<a style="margin: 20px 1px 1px 10px; width:300px" href="' . $fetchApostilas['src'] . '" target="_blank" type="button" class="btn btn-success" >Baixar Apostila "' . $fetchApostilas['nomeApostila'] . '" </a>  ';
                        }
                        ?>
                        <br>
                        <h3 style="margin: 20px 1px 1px 10px;">Questionário</h3>
                        <button type="button" class="btn btn-info" style="margin: 20px 1px 1px 10px; width:300px" onclick="$('#modalForm').modal(); document.getElementById('iframeQuestionario').contentWindow.location.reload(true);">Abrir questionário do Módulo <?php echo $modulo; ?></button>
                        
                    </div>

                        <div>

                            <button style=" background-color: #04D2C8;" id="btn_video" 
                                    onclick="anteriorVideo();"> Anterior</button>
                            <button style="margin: 6px 10px; background-color: #04D2C8;" id="btn_video"
                                    onclick="avancarVideo();"> Avançar</button>
                        </div>





                </div>
            </div>

        </div>


        <!--================Blog Area =================-->


        <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-personalizado" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe width="100%" id="iframeQuestionario" style="height: 400px" frameborder="0" src="../../questionario/questionario?modulo=<?php echo $modulo ?>" ></iframe>
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.js"></script>
        <script src="https://use.fontawesome.com/188494abaf.js"></script>
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

                                    function alteraImagem() {
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
                                        //avanca para o proximo video
                                        if ((videoAtual + 1) < <?php echo "$qua"; ?>) {
                                            var botaoVideo = document.getElementById("player");

                                            botaoVideo.innerHTML = (videosVetor[videoAtual + 1]);
                                            botaoVideo.src = (videosVetorSRC[videoAtual + 1]);

                                            $('#divplayeraudio').hide();
                                            $('#idvideo').show();

                                            videoAtual++;
                                            alteraImagem();
                                        } else { //avanca para o audio do modulo
                                            if ((videoAtual + 1) == <?php echo "$qua"; ?>) {

                                                //pausar o player quando mudar do video para o audio (use o if play para evitar erros)
                                                //document.getElementById('video').pause;

                                                $('#divplayeraudio').show();
                                                $('#idvideo').hide();

                                                videoAtual++;
                                                podcastM1();
                                            } else if (videoAtual == <?php echo "$qua"; ?>) { //avanca para o questionario do modulo
                                                videoAtual++;
                                                $('#btnModal').show();

                                                $('#divplayeraudio').hide();

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
                                            $('#divplayeraudio').show();
                                            $('#idvideo').hide();
                                            $('#btnModal').hide();

                                            videoAtual--;

                                            podcastM1();
                                        }
                                    }

<?php
for ($i = 1; $i <= $qua; $i++) {
    echo
    "function aula$i(){
                desativarTodos();
                var aula = document.getElementById('aula$i');
                aula.src = 'img/iconVideoSelec.png';
            }";
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
    echo
    "
                var aula$i = document.getElementById('aula$i');
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
                $('#btnModal').hide();
                
                //setTimeout(function(){ document.getElementById("player").timestamp }, 1000);
            });


            

        </script>

        <script src="https://cdn.plyr.io/3.5.10/plyr.js"></script>

        <script>
            const player = new Plyr('#player');
            const playeraudio = new Plyr('#playeraudio');
        </script>
    </body>
</html>