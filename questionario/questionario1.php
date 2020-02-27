<?php
$modulo = 2;
$usuarioId = 7;
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
            $sqlt = "INSERT INTO `user_resp` (`usuario_idUsuario`, `pergunta_idPergunta`, `resposta_usuario`, `data`) VALUES ('$usuarioId', '$ar[1]', '$ar[0]', '" . date('Y-m-d') . "');";
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
    mysqli_query($connection, "INSERT INTO `questionario` (`idQuiz`, `modulo_idModulo`, `usuario_idUsuario`) VALUES (NULL, '$modulo', '$usuarioId');");
    die;
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <div>
            <form method="POST" action="questionario1.php">
                

                <?php
                $loop = 0;
                while ($fetchPerguntas = mysqli_fetch_array($queryPergunta)) {
                    $loop++;
                    echo 'Questão ' . $loop;
                    $perguntaAtual = $fetchPerguntas['idPergunta'];
                    $queryResposta = mysqli_query($connection, "select * from resposta where pergunta_idPergunta = '$perguntaAtual' order by rand();");
                    echo '<div><textarea style="width: 500px; height: 90px;" readonly>' . $fetchPerguntas['pergunta'] . '</textarea></div>';
                    echo'
                        <br>

                        <div class = "form-group">
                        <div class = "col-md-4">';

                    $letraN = 65;
                    while ($fetchRespostas = mysqli_fetch_array($queryResposta)) {

                        $letra = chr($letraN);
                        $letraN++;
                        echo '<div class="radio">
                                        <label for="radios-1">
                                        <input type="radio" name="radios' . $loop . '" value="' . $fetchRespostas[0] . ',' . $perguntaAtual . '" required>
                                        ' . $letra . ') ' . $fetchRespostas[1] . '
                                        </label>
                                        </div>';
                    }
                    echo '<br><br><br><br><br><br><br><br><br><br><br><br><br>';
                }
                ?>

        </div>
    </div> <br>
    <div class="form-group">
        <div class="col-md-12">
            <input type="submit" value="Responder">
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