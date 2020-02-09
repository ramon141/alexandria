<?php
if ($_POST && $_GET && isset($_GET['page'])) {
	session_start();
	$pagina = $_GET['page'];
	$_SESSION['emailUsuario'] = $_POST['emailUser'];
	$emailUsuario = $_POST['emailUser'];
	$senhaUsuario = $_POST['senhaUser'];
	$conexao = mysqli_connect('localhost', 'alexandria', 'alexandria', 'alexandria');
	if ($conexao) {
		echo "<br>conectou<br>";
		$sql = "SELECT * FROM usuario WHERE  emailUsuario = '$emailUsuario' and senhaUsuario = '$senhaUsuario'";
		$buscarUser = mysqli_query($conexao,$sql);
                
                if (mysqli_num_rows ($buscarUser) > 0){
			echo "<br> Login efetuado com sucesso";
			while ($fetch = mysqli_fetch_row($buscarUser)) {
				$_SESSION ['nomeUsuario'] = $fetch[1];
                                $idUsuario = $fetch[0];
			}
                        $query10 = mysqli_query($conexao, "select * from pagamento where usuario_idUsuario = $idUsuario");
                        $tem10 = mysqli_num_rows($query10);
                        if($tem10 > 0){
                            $_SESSION['temcartao'] = 1;
                            echo "entrou";
                        }
			header("location: $pagina");
		}else{
			header("Location: $pagina?mensagem=0");
		}
                
	} else {
		header("Location: $pagina?mensagem=0");
	}
	if($conexao){
		mysqli_close($conexao);
	}
} else {
	echo "parametros da pagina inválidos";
}

?>
