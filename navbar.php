<?php
	echo"<div class='col-xl-7 col-lg-7'>
			<div class='main-menu d-none d-lg-block'>
				<nav>
					<ul id='navigation'>
						<li><a href='index.php'>Início</a></li>
						<li><a href='#'>MOOC <i class='ti-angle-down'></i></a>
							<ul class='submenu'>
								<li><a href='mooc/escrita-academica/index.php'>Escrita Acadêmica</a></li>
							</ul>
						</li>
						<li><a href='about.php'>Sobre</a></li>
						<li><a href='#'>blog <i class='ti-angle-down'></i></a>
							<ul class='submenu'>
								<li><a href='material-gratuito.php'>material gratuito</a></li>
								<li><a href='analise.php'>Análise de Sistemas</a></li>
								<li><a href='bd.php'>Banco de Dados</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div> ";
	if (isset($loginUser)) {
		echo "
		<div class='col-xl-3 col-lg-3'>
			<div class='main-menu d-none d-lg-block'>
				<ul>
					<li><a href='#'> $loginUser <i class='ti-angle-down'></i></a>
						<ul class='submenu'>
							<li><a href='contaUser.php'>Configuração de Conta</a></li>
							<li><a href='logout.php'>Sair</a></li>
						</ul>
					</li>
				</ul>
			</div>  
		</div>  ";
	}else{
		echo"
		<div class='col-xl-3 col-lg-3 d-none d-lg-block'>
			<div class='log_chat_area d-flex align-items-center'>
				<a href='#test-form' class='login popup-with-form'>
					<span class='flaticon-user'> Entrar </span>
				</a>
				<a href='#test-form2' class='login popup-with-form'>
					<span class='boxed_btn_orange'>Cadastrar</span>
				</a>
			</div>
		</div>  ";
	}
?>