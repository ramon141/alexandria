<?php
if ($_POST) {
	session_start();
	$numeroCartao = $_POST['numeroCartao'];
	$cvv = $_POST['cvv'];
	$validadeCartao = $_POST['validadeCartao'];
	//$dataPagamento = $_POST['dataPagamento'];
	$statusPagamento = $_POST['statusPagamento'];
	$usuario_idUsuario = $_POST['nomeUsuario'];
	$idUsuarioSession = $_SESSION['idUsuario'];
	$conexao = mysqli_connect('localhost', 'alexandria', 'alexandria', 'alexandria');

	if ($conexao) {
		$query = mysqli_query($conexao, "select * from pagamento where usuario_idUsuario = $idUsuarioSession");
		$tem = mysqli_num_rows($query);
		if($tem == 0){
			$sql = "INSERT INTO `pagamento` (`numeroCartao`, `cvv`, `validadeCartao`, `statusPagamento`, `usuario_idUsuario`) VALUES ('$numeroCartao', '$cvv', '$validadeCartao', '0', '$usuario_idUsuario')";
				$CompraUser = mysqli_query($conexao,$sql);
				header("location: index.php");				
		}
		else {
			header("location: index.php");
		}
	}else
	echo "não conectou";
}

?>
 