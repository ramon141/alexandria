<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
if (isset($_SESSION['nomeUsuario'])) {
    $loginUser = $_SESSION['nomeUsuario'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Acesso Negado</title>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Alexandria</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="manifest" href="site.webmanifest"> -->
	<link rel="shortcut icon" type="image/x-icon" href="img/alexandria-logo.jpeg">
	<!-- Place favicon.ico in the root directory -->

	<!-- CSS here -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="css/style.css">
	<!-- <link rel="stylesheet" href="css/responsive.css"> -->
	
</head>
<body>

	<!-- navbar-start -->

        <?php require 'navbar.php' ?>

     <!-- navbar-ends -->
     <br><br><br><br>

	<div style="background-color: #E8E8E8;">
		<br>
		<h5 style="float: left; margin-left: 4%; color: #FFA500;;">Erro 403 - Acesso Negado</h5><br><br>
		<fieldset style="background-color: white; margin: 20px 120px;"> <br><br>
			<h3 style="float: left; margin-left: 10%; color: #FFA500;">Oops! Você não possui acesso à este conteúdo :( </h3><br><br>
			<h5 style="float: left; margin-left: 10%; color: #CDC8B1;"> Estamos redirecionando para a página inical. </h5> <br><br><br>
			<h2 style="float: left; margin-left: 40%; color: #FFA500;;">Aguarde:</h2> 
			<h2 style="font-size: 30px; float: left; margin-left: 1%; color: #FFA500;;" id="tempo">5s</h2> <br><br><br><br><br></fieldset><br>
	</div>

</body>
</html>

<script type="text/javascript"> 
    function diminuir(){
        var x = document.getElementById("tempo");
        setTimeout(function(){ x.innerHTML = "4s" }, 1000);
        setTimeout(function(){ x.innerHTML = "3s" }, 2000);
        setTimeout(function(){ x.innerHTML = "2s" }, 3000);
        setTimeout(function(){ x.innerHTML = "1s" }, 4000);
        setTimeout(function(){ x.innerHTML = "0" }, 5000);
        setTimeout(function(){ window.location="/alexandria/";}, 6000);
    }
</script>


<?php

	echo "<script type='text/javascript'>diminuir();</script>";
?>

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