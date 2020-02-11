<?php

	session_start();

	$perguntaR = "Sem pergunta";
        $valorDaQuestao = 50;
        
        //  $_SESSION['nota'] = 0;
        
        if(!isset($_SESSION['nota'])){
            $_SESSION['nota'] = 0;
        }

	if(!isset($_SESSION['respostaUltima'])){
		$_SESSION['respostaUltima'] = -1;
	}
	if(isset($_POST['radios']) && strcmp($_POST['radios'], $_SESSION['respostaUltima']) == 0){
		--$_SESSION['perguntaAtual'];
	}

		if($_POST){
	
			$respostaUsuario = $_POST['radios'];
			$_SESSION['respostaUltima'] = $respostaUsuario;
			if(strcmp($respostaUsuario, $_SESSION['respostaCorreta']) == 0){
                           
                           $_SESSION['nota'] = $_SESSION['nota'] + $valorDaQuestao;
                           
			} else {
				echo "Você não acetou";
			}
		} else {
			$_SESSION['perguntaAtual'] = 0;
		}
                    require_once ("../../conexao.php");
		    $query = mysqli_query($connection, "select * from pergunta where modulo_idModulo = 1");
		    $loop = 0;
		    
		    $tem = mysqli_num_rows($query);

		    if(!isset($_SESSION['perguntaAtual'])){
		    	$perguntaAtual = 0;
		    	$_SESSION['perguntaAtual'] = 0;
		    } else {
		    	$perguntaAtual = $_SESSION['perguntaAtual'];
		    }

		    while ($fetch = mysqli_fetch_array($query)){
		    	if($loop == $perguntaAtual){
		        	$perguntaR = $fetch[1];
		        	$_SESSION['respostaCorreta'] = $fetch[2];
		        	$idPergunta = $fetch[0];
		    	}
		    	$loop++;
		    }
		    if($tem == $_SESSION['perguntaAtual']){
		    	$perguntaR = "Total de pontos: " . $_SESSION['nota'];
                        $query = mysqli_query($connection, "select * from pergunta where modulo_idModulo = 1");
                        $query = mysqli_query($connection, "INSERT INTO `questionario` (`idQuiz`, `notaQuiz`, `modulo_idModulo`) VALUES (NULL, '100', '1');");
                        
                        
                        $_SESSION['nota'] = 0;
		    }else{
		    	$queryRespostas = mysqli_query($connection, "select * from resposta where pergunta_idPergunta = '$idPergunta' order by rand();");
		    }

		    $_SESSION['perguntaAtual']++;	
    //$_SESSION['perguntaAtual'] = 0;
	//$_SESSION['respostaUltima'] = -1;
?>


<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<div>
		
			<fieldset style="width: 580px; height: 270px;">
				<div>
					<p> Responda esse questionário sobre o que voce estudou.</p>
					<div>                     
						<textarea style="width: 500px; height: 90px;" id="questao" name="questao" readonly><?php echo $perguntaR; ?></textarea>
					</div>
				</div><br>
				<form method="POST" action="questionario1.php">
					<div class="form-group">
						<div class="col-md-4">
							<?php 						

							if($tem != $perguntaAtual){
								$letraN = 65;
								while ($fetchRespostas = mysqli_fetch_array($queryRespostas)) {
										
										$letra = chr($letraN);
										$letraN++;
										echo '<div class="radio">
											<label for="radios-1">
												<input type="radio" name="radios" value="'.$fetchRespostas[0].'" required>
												'.$letra.') '.$fetchRespostas[1].'
											</label>
										</div>';
									}
							}
							?>
						</div>
					</div><br>
					<div class="form-group">
						<div class="col-md-12">
	                            <input type="submit" value="Próxima">
						</div>
					</div>
				</form>
			</fieldset>
		</form>
	</div>
</body>
</html>
