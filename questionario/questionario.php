<?php
session_start();
if (!$_SESSION) {
    header("Location: acessNegado");
} else {
    if (!strcmp($_SESSION['login'], "ok") == 0) {
        header("Location: acessNegado");
    }
}
$modulo = $_GET['modulo'];
$usuarioId = $_SESSION['idUsuario'];

require_once '../conexao.php';
$queryPergunta = mysqli_query($connection, "select * from pergunta where modulo_idModulo = '$modulo' order by rand();");
if (mysqli_num_rows(mysqli_query($connection, "SELECT * FROM `questionario` where usuario_idUsuario = '$usuarioId' and modulo_idModulo = '$modulo'")) > 0) {
    echo "O questionário deste módulo já foi respondido<br>";
    echo '<a href="notas.php">Verificar nota</a><br>';
    echo '<a href="notas.php">Excluir teste anterior e refazê-lo</a><br>';
    die;
}


if ($_POST) {
    foreach ($_POST as &$value) {
        $ar = explode(",", $value);
        if (mysqli_num_rows(mysqli_query($connection, "SELECT * FROM `user_resp` where usuario_idUsuario = '$usuarioId' and pergunta_idPergunta = '$ar[1]'")) == 0) {
            $sqlt = "INSERT INTO `user_resp` (`usuario_idUsuario`, `pergunta_idPergunta`, `resposta_usuario`) VALUES ('$usuarioId', '$ar[1]', '$ar[0]');";
            echo $sqlt;
            if (mysqli_query($connection, $sqlt)) {
                echo "Respostas adicionadas com sucesso!";
            } else {
                echo "Houve um erro ao inserir as notas, caso o erro persista entre em contato conosco";
            }
        } else {
            echo "O formulário já tinha sido respondido antes";
        }
    }
    mysqli_query($connection, "INSERT INTO `questionario` (`idQuiz`, `modulo_idModulo`, `usuario_idUsuario`, `data`) VALUES (NULL, '$modulo', '$usuarioId','" . date('Y-m-d') . "');");
    die;
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="check.css">
    </head>
    <body>
        <div>
            <form method="POST" action="questionario?modulo=<?php echo $modulo ?>" style="text-align: justify;">


                <?php
                $loop = 0;
                while ($fetchPerguntas = mysqli_fetch_array($queryPergunta)) {
                    $loop++;
                    $perguntaAtual = $fetchPerguntas['idPergunta'];
                    $queryResposta = mysqli_query($connection, "select * from resposta where pergunta_idPergunta = '$perguntaAtual' order by rand();");
                    echo '<h3 style="border-radius: 10px; padding: 10px; background-color: powderblue;">' . $loop .' - '. $fetchPerguntas['pergunta'] . '</h3>';
                    echo'
                        <br>

                        <div class = "form-group">
                        <div class = "col-md-4">';

                    $letraN = 65;
                    while ($fetchRespostas = mysqli_fetch_array($queryResposta)) {

                        $letra = chr($letraN);
                        $letraN++;
                        
                        echo'<label class="container"> 
                                        ' . $letra . ') ' . $fetchRespostas[1] . '
	  				<input type="radio" name="radios' . $loop . '" value="' . $fetchRespostas[0] . ',' . $perguntaAtual . '" required>
	  				<span class="checkmark"></span>
				</label><br>';
                        
                    }
                    echo '<br><br><br><br><br><br><br><br><br><br><br><br><br>';
                }
                ?>

        </div>
    </div> <br>
    <div class="form-group">
        <div class="col-md-12">
            <button type="submit" style="background-color: powderblue;  color: white; padding: 10px; width: 100px; border: none; text-align: center; font-size: 16px; cursor: pointer;">Enviar</button>
        </div> 
    </div>
</form>
</div>
</body>
</html>
<?php
if ($connection) {
    mysqli_close($connection);
}
?>