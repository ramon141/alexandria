<?php
	$connection = mysqli_connect('localhost:3308', 'root', '') or die ('Erro ao conectar');
	$bd = mysqli_select_db ($connection, 'alexandria') or die ("base de dados nao selecionada");
	$connection->set_charset("utf8");
?>
