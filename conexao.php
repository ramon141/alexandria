<?php
	$connection = mysqli_connect('localhost', 'alexandria', 'alexandria') or die ('Erro ao conectar');
	$bd = mysqli_select_db ($connection, 'alexandria') or die ("base de dados nao selecionada");
?>
