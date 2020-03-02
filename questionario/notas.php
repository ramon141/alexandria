<?php


$idUsuario = 7;

require_once '../conexao.php';
$query = mysqli_query($connection, "select * from questionario where usuario_idUsuario = $idUsuario");

require_once './calcNota.php';

?>



<html>
    <head>
        <title>title</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php if (mysqli_num_rows($query) > 0) { ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Módulo</th>
                        <th scope="col">Data</th>
                        <th scope="col">Nota</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    while ($fetchQuestionario = mysqli_fetch_array($query)) {
                        $nota = getNota($fetchQuestionario['modulo_idModulo'], $connection, $idUsuario);
                        if($nota >= 70){
                            $status = "Aprovado";
                        } else {
                            $status = "Reprovado";
                        }
                        echo '
                        <tr>
                            <th scope="row">'.$fetchQuestionario['modulo_idModulo'].'</th>
                            <td>'.date('d/m/Y', strtotime($fetchQuestionario['data'])).'</td>
                            <td>'.$nota.'</td>
                            <td>'.$status.'</td>
                            <td><a href="notas?modulo='.$fetchQuestionario['modulo_idModulo'].'">Detalhes</a></td>    
                        </tr>';
                    }
                    ?>
                </tbody>
            </table>
        <?php } else {
            echo "Nenhum questionário foi respondido";
        } ?>
    </body>
</html>
