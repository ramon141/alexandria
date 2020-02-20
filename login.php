<?php

if ($_POST && $_GET && isset($_GET['page'])) {
    session_start();
    $pagina = $_GET['page'];
    $_SESSION['emailUsuario'] = $_POST['emailUser'];
    $emailUsuario = $_POST['emailUser'];
    $senhaUsuario = $_POST['senhaUser'];
    require_once './conexao.php';
    if ($connection) {
        $sql = "SELECT * FROM usuario WHERE  emailUsuario = '$emailUsuario' and senhaUsuario = '" . md5($senhaUsuario) . "'";
//        echo $sql;
        $buscarUser = mysqli_query($connection, $sql);

        if (mysqli_num_rows($buscarUser) > 0) {
//            echo "<br> Login efetuado com sucesso";
            while ($fetch = mysqli_fetch_row($buscarUser)) {
                $_SESSION ['nomeUsuario'] = $fetch[1];
                $_SESSION ['idUsuario'] = $fetch[0];
                $_SESSION ['sobrenomeUsuario'] = $fetch[2];
                $_SESSION ['senhac'] = $fetch[4];
                $_SESSION ['senhas'] = $senhaUsuario;
                $idUsuario = $fetch[0];
            }
            $query10 = mysqli_query($connection, "select * from pagamento where usuario_idUsuario = $idUsuario");
            $tem10 = mysqli_num_rows($query10);
            if ($tem10 > 0) {
                $_SESSION['temcartao'] = 1;

                //verificar se o cara pagou

                while ($fetch11 = mysqli_fetch_row($query10)) {
                    $dataBD = $fetch11[3];
                }
                $dataAdd = date('Y-m-d', strtotime($dataBD . ' + 1 month'));
                $dataAtual = date('Y-m-d');
                echo $dataAtual . "atual<br>";
                echo $dataAdd . "add<br>";
                if ($dataAtual <= $dataAdd) {
                    $_SESSION['statusPagamento'] = 1;
                } else {
                    $_SESSION['statusPagamento'] = 0;
                }

                //fim do "verificar se o cara pagou"
            }

            if (endsWith($pagina, "?mensagem")) {
                header("Location: " . substr($pagina, 0, -11));
            } else {
                header("Location: $pagina");
            }
            
        } else {
            if (endsWith($pagina, "?mensagem")) {
                header("Location: $pagina");
            } else {
                header("Location: $pagina?mensagem=0");
            }
        }
    } else {
        if (endsWith($pagina, "?mensagem")) {
            header("Location: $pagina");
        } else {
            header("Location: $pagina?mensagem=0");
        }
    }
    if ($connection) {
        mysqli_close($connection);
    }
} else {
    echo "parametros da pagina inválidos";
}

function endsWith($haystack, $needle) {
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }
    return (substr(substr($haystack, 0, -2), -$length, $length) === $needle);
}

?>
