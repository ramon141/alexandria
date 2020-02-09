<?php 
    session_start();
    if(isset($_SESSION['nomeUsuario'])){
            $loginUser = $_SESSION['nomeUsuario'];
    }
    require_once 'conexao.php';
    $query = mysqli_query($connection, "select * from topico_foruns");
?>

<!doctype html>
<html lang="pt">

<head>
	<meta charset="utf-8"/>
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
						<div class="col-xl-1 col-lg-1">
							<div class="logo-img">
								<a href="index.php">
									<img src="img/logoAlexandria.png" alt="Alexandria" style="width:80px;height:80px;">
								</a>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6">
							<div class="main-menu  d-none d-lg-block">
								<nav>
									<ul id="navigation">
										<li><a href="http://webdev.santarem.ifpa.edu.br/alexandria/site/index.php">home</a></li>
										<li><a href="#">MOOC <i class="ti-angle-down"></i></a>
											<ul class="submenu">
												<li><a href="index.php">escrita acadêmica</a></li>
											</ul>
										</li>
										<li><a href="http://webdev.santarem.ifpa.edu.br/alexandria/site/about.php">About</a></li>
										<li><a href="#">blog <i class="ti-angle-down"></i></a>
											<ul class="submenu">
												<li><a href="http://webdev.santarem.ifpa.edu.br/alexandria/site/materia-gratuito.php">material gratuito</a>
												</li>
												<li><a href="http://webdev.santarem.ifpa.edu.br/alexandria/site/analise.php">Análise de Sistemas</a>
												</li>
												<li><a href="http://webdev.santarem.ifpa.edu.br/alexandria/site/bd.php">Banco de Dados</a>
												</li>
											</ul>
										</li>
										<li><a class="active" href="forum.php">Fórum</a></li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-xl-5 col-lg-5">
							<div class="log_chat_area d-flex align-items-center">    
								<?php 
								if (isset($loginUser)) {
									echo "
									<div class='col-xl-7 col-lg-7'>
									<div class='main-menu d-none d-lg-block'>
									<ul>
									<li><a href='#'> $loginUser <i class='ti-angle-down'></i></a>
									<ul class='submenu'>
									<li><a href='contaUser.php'>Configuração de Conta</a></li>
									<li><a href='logout.php'><span class='flaticon-log-out'></span>Sair</a></li>
									</ul>
									</li>
									</ul>
									</div>  
									</div> ";
								}
								?>
							</div>
						</div>
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

	<div class="courses_details_info">
		<div class="container">
			<div class="outline_courses_info">
				<h1> Tópico</h1>
				<br>
			</div>
			<h3>FeedBack</h3>
			<h5>Aqui você pode contar como foi sua experiência usando a plataforma MOOC</h5><br>
			<hr>
			<h1>RESPOSTAS</h1>
                        <?php
                            while ($fetch = mysqli_fetch_array($query)){
                                $var = "";
                                $query2 = mysqli_query($connection, "select * from resposta_topico ");
                                while($fetch2 = mysqli_fetch_array($query2)){
                                    if($fetch[0] == $fetch2[3]){
                                        $var .= "   <p style='width: 50%; border: 2px solid #4682b4;'>$fetch2[1]</p>";
                                    }
                                }
                                echo "<div>
                                            
                                            <label style='color: #4682b4;' for='textarea'>Tópico: $fetch[1]</label><br>
                                            <label style='color: #4682b4;' for='textarea'>Postado: $fetch[3]</label>
                                            <br>$fetch[2]<br>
                                            $var
                                      </div><br>";
                                
                                
                            }
                        
                        
                        ?>
                            
                            <br>
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
						Copyright Alexandria 2019</a>
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