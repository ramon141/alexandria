<?php 

	require_once("../conexao.php");
	$idUsuario = 4;
	$queryModulo = mysqli_query($connection, "SELECT * from modulo");
	$quantModulo = mysqli_num_rows($queryModulo);
	require_once("calcNota.php");
	$nota = new teste;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Suas Notas</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head>
	<body>
		<div>

		<?php 
		$loop = 0;
		$umaVez = true;
		while ($loop < $quantModulo) {
			$quantRegistrosLocal = 0;
			$queryUserResp = mysqli_query($connection, "SELECT * FROM `userresp` where usuario_idUsuario = $idUsuario");
			$quantRegistros =  mysqli_num_rows($queryUserResp);
			if($quantRegistros == 0){
				echo "Nenhuma pergunta respondida";
				break;
			}

			$loop++;
			echo "<table class='table table-bordered table-dark'>
            <thead>
                <tr>
                    <th scope='col'>Pergunta</th>
                    <th scope='col'>Sua resposta</th>
                    <th scope='col'>Resposta Certa</th>
                    <th scope='col'>Módulo</th>
                    <th scope='col'>Hora de Resposta</th>
                    <th scope='col'>Certo ou Errado?</th>
                    <th scope='col'>Pontuação pela questão</th>
                    <th scope='col'>Nota Total por módulo</th>
                </tr>
            </thead>
            <tbody>";
			
							while($fetch = mysqli_fetch_array($queryUserResp)){

							$resp = $fetch[1];
							$queryResposta = mysqli_query($connection, "SELECT * FROM `resposta`  where idResposta = $resp");

							while($fetch2 = mysqli_fetch_array($queryResposta)){

								$idPergunta = $fetch2[2];
								$respostaUsuario = $fetch2[1];
								$queryPerguntas = mysqli_query($connection, "SELECT * FROM `pergunta` where idPergunta = $idPergunta");

								while($fetch3 = mysqli_fetch_array($queryPerguntas)){
									$idRespostaCerta = $fetch3[2];
									$queryRespostaCerta = mysqli_query($connection, "SELECT * FROM `resposta`  where idResposta = $idRespostaCerta");
									$modulo = $fetch3[3];

									while($fetch4 = mysqli_fetch_array($queryRespostaCerta)){
										$respostaCerta = $fetch4[1];
									}

									$pergunta = $fetch3[1];
								}
							}

							$horadeResposta = $fetch[2];
							$notaPorResposta = $fetch[3];
							if($idRespostaCerta == $resp){
								$msgCertoErrado = "Você acertou essa questão!";
							} else {
								$msgCertoErrado = "Você errou essa questão!";
							}

							if($loop == $modulo){
									if($umaVez){

									$nota -> modulo = $modulo;
									$tttt = "<td align=\"center\">".$nota->getNota()."</td>";
									$umaVez = false;
								} else {
									$tttt = "";

								}

									echo "
										<tr>
								               <td align=\"center\">".$pergunta."</td>
								               <td align=\"center\">".$respostaUsuario."</td>
								               <td align=\"center\">".$respostaCerta."</td>
								               <td align=\"center\">".$modulo."</td>
								               <td align=\"center\">".$horadeResposta."</td>
								               <td align=\"center\">".$msgCertoErrado."</td>
								               <td align=\"center\">".$notaPorResposta."</td>
								               ".$tttt."
								        </tr>
								        ";
						    } else {
						    	$quantRegistrosLocal++;
						    	if($quantRegistrosLocal == $quantRegistros){
						    		echo "
										<tr>
								               <td align=\"center\">Sem Registros</td>
								               <td align=\"center\">Sem Registros</td>
								               <td align=\"center\">Sem Registros</td>
								               <td align=\"center\">".$loop."</td>
								               <td align=\"center\">Sem Registros</td>
								               <td align=\"center\">Sem Registros</td>
								               <td align=\"center\">Sem Registros</td>
								               <td align=\"center\">Sem Nota</td>
								        </tr>
								        ";
						    	}
						    }
						}
						echo "</tbody>
				        </table>";
				        $umaVez = true;
	}
		?>

</div>

	</body>
</html>
<?php 

	if($connection) mysqli_close($connection);
 ?>