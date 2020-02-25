<?php
session_start();
if(!$_SESSION){
            header("Location: ../../acessNegado.php");
    } else {
        if(!strcmp($_SESSION['login'], "ok") == 0){
            header("Location: ../../acessNegado.php");
        }
    }
if ($_POST) {
	$numeroCartao = $_POST['numeroCartao'];
	$cvv = $_POST['cvv'];
	$validadeCartao = $_POST['validadeCartao'];
	//$dataPagamento = $_POST['dataPagamento'];
	$statusPagamento = $_POST['statusPagamento'];
	$usuario_idUsuario = $_POST['nomeUsuario'];
	$idUsuarioSession = $_SESSION['idUsuario'];
	require_once ("../../conexao.php");

	if ($connection) {
		$query = mysqli_query($connection, "select * from pagamento where usuario_idUsuario = $idUsuarioSession");
		$tem = mysqli_num_rows($query);
		if($tem == 0){
			$sql = "INSERT INTO `pagamento` (`numeroCartao`, `cvv`, `validadeCartao`, `statusPagamento`, `usuario_idUsuario`) VALUES ('$numeroCartao', '$cvv', '$validadeCartao', '0', '$usuario_idUsuario')";
				$CompraUser = mysqli_query($connection,$sql);
				header("location: index.php");				
		}
		else {
			header("location: index.php");
		}
	}else
	echo "não conectou";
}

?>
 