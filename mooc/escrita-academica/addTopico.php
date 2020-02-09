<?php

if(isset($_POST['nomeTopico']) && isset($_POST['areaDescricao'])){
    require_once 'conexao.php';
    $dataAtual = date('Y-m-d');
    $nomeTopico = $_POST['nomeTopico'];
    $areaDescricao = $_POST['areaDescricao'];
    
    
    echo "INSERT INTO `topico_foruns` (`idTopico`, `nomeTopico`, `pergunta`, `dataCadastroTopico`, `modulo_idModulo`) VALUES (NULL, '$nomeTopico', '$areaDescricao', '$dataAtual', '1');";
    $query = mysqli_query($connection, "INSERT INTO `topico_foruns` (`idTopico`, `nomeTopico`, `pergunta`, `dataCadastroTopico`, `modulo_idModulo`) VALUES (NULL, '$nomeTopico', '$areaDescricao', '$dataAtual', '1');");
    if($query){
        header("Location: forum.php?m=1");
    } else {
        header("Location: forum.php?m=0");
    }
    
}
    