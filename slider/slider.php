<?php echo "
<!DOCTYPE html>
<html lang='pt-br'>
	<head>
		<meta charset='UTF-8'>
		<title>SLIDER</title>
		<meta name='viewport' content='width=device-width,initial-scale=1'/>
		<link rel='stylesheet' href='/alexandria/slider/css/slider.css'>
	</head>
	<body>
		<div>
			<!-- INICIO DO SLIDER -->
			<section class='slider'>
				<div class='slider_box'>
                                        
                                        <article class='slider_item' data-slider-bg='slider/images/mooc.jpg'>
						<div class='slider_content'>
							<h2>Bem Vindo ao Alexandria</h2>
							<a href='about.php' class='boxed_btn'>Saiba Mais!</a>
							</div>
					</article>
                                        
                                        <article class='slider_item active' data-slider-bg='slider/images/bemVindos.png'>
						<div class='slider_content'>
							<h2>Bem Vindo ao Alexandria</h2>
							<a href='mooc/escrita-academica/index.php' class='boxed_btn'>Saiba Mais!</a>
							</div>
					</article>

				</div>
				<div class='slider-prev'>&lt;</div>
				<div class='slider-next'>&gt;</div>
			</section>
			<!-- FIM DO SLIDER -->

		</div>
		<script src='/alexandria/slider/js/jquery.js'></script>
		<script src='/alexandria/slider/js/slider.js'></script>
	</body>
</html>
"; ?>