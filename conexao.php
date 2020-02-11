<?php
	$connection = mysqli_connect('localhost', 'admin', 'admin') or die ('Erro ao conectar');
	$bd = mysqli_select_db ($connection, 'alexandria') or die ("base de dados nao selecionada");
	$connection->set_charset("utf8");
?>
