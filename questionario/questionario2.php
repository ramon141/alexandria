<?php

	session_start();





	$perguntaR = "Sem pergunta";


	require_once '../conexao.php';
	//mysqli_query($connection, "TRUNCATE `userresp`;");


	if(!isset($_SESSION['nota'])){
		$_SESSION['nota'] = 0;
	}

	if(!isset($_SESSION['respostaUltima'])){
		$_SESSION['respostaUltima'] = -1;
	}
	if(isset($_POST['radios']) && strcmp($_POST['radios'], $_SESSION['respostaUltima']) == 0){
		--$_SESSION['perguntaAtual'];
	}


	$idUsuario = $_SESSION['idUsuario'];
	


	if($_POST){
		
		$respostaUsuario = $_POST['radios'];
		$_SESSION['respostaUltima'] = $respostaUsuario;



		$horaAtual = date("H:m:s");
		$insetUserresp = mysqli_query($connection, "INSERT INTO `userresp` (`usuario_idUsuario`, `resposta_idResposta`, `horaResp`, `notaQuiz`) VALUES ('$idUsuario', '$respostaUsuario', '$horaAtual', '1');");
		if(strcmp($respostaUsuario, $_SESSION['respostaCorreta']) == 0){
		} else {
			echo "Você não acetou";
		}
	} else if(!isset($_GET['r'])){
		$_SESSION['perguntaAtual'] = 0;
	}

	$query = mysqli_query($connection, "select * from pergunta where modulo_idModulo = 2");
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

			//inicio pergunta ja respondida
			$queryvNotas = mysqli_query($connection, "SELECT * FROM vnotas where modulo_idModulo = '2' and usuario_idUsuario = '$idUsuario' and idPergunta = '$fetch[0]'");
			$temm = mysqli_num_rows($queryvNotas);
			if($temm >= 1){
				$_SESSION['respostaUltima'] = -1;
				$_SESSION['perguntaAtual'] = $_SESSION['perguntaAtual'] + 1;
				echo "Essa pergunta já foi respondida<br>";
				echo "<a href=\"questionario2.php?r=1\">Próxima</a><br>";
				exit();

				//die;
			}
			//fim pergunta ja respondida



			$_SESSION['respostaCorreta'] = $fetch[2];
			$idPergunta = $fetch[0];
		}
		$loop++;
	}
	if($tem == $_SESSION['perguntaAtual']){

		$perguntaR = "Fim das perguntas";
		$_SESSION['perguntaAtual'] = 0;
		$_SESSION['respostaUltima'] = 0;	

	}else{
		$queryRespostas = mysqli_query($connection, "select * from resposta where pergunta_idPergunta = '$idPergunta' order by rand();");
	}

	$_SESSION['perguntaAtual']++;

    //$_SESSION['perguntaAtual'] = 0;
	//$_SESSION['respostaUltima'] = -1;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<div>
		
		<fieldset style="width: 580px;">
			<div>
				<p> Responda esse questionário sobre o que voce estudou.</p>
				<div>                     
					<textarea style="width: 500px; height: 90px;" id="questao" name="questao" readonly><?php echo $perguntaR; ?></textarea>
				</div>
			</div><br>
			<form method="POST" action="questionario2.php">
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
	</div>
</body>
</html>
<?php 
if($connection){
	mysqli_close($connection);
}

?>