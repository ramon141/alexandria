<?php

session_start();
include_once("conexao.php");

$nomeUsuario = $_POST['nomeUsuario'];
$pagina = $_POST['pagina'];
$sobrenomeUsuario = $_POST['sobrenomeUsuario'];
$emailUsuario = $_POST['emailUsuario'];

$senhaUsuario = $_POST['senhaUsuario'];
$senhaConfirmar = $_POST['senhaConfirmar'];
$tipoUsuario = "0";


if ($senhaConfirmar != $senhaUsuario) {
    //header("Location: index.html");
    //exit();
    //echo "senha diferente";
} else {

    $query = mysqli_query($connection, "SELECT * FROM usuario WHERE emailUsuario = '{$emailUsuario}'");
    if (mysqli_num_rows($query) == 1) {
        //echo "Email já cadastrado";
    } else {
        echo $senhaUsuario . "<br>";
        $senhas = $senhaUsuario;
        $senhaUsuario = md5($senhaUsuario);
        $query = mysqli_query($connection, "INSERT INTO usuario (nomeUsuario, sobrenomeUsuario, emailUsuario, senhaUsuario, tipoUsuario) values ('$nomeUsuario', '$sobrenomeUsuario', '$emailUsuario', '$senhaUsuario', '$tipoUsuario')");

        //echo "INSERT INTO usuario (nomeUsuario, sobrenomeUsuario, emailUsuario, senhaUsuario, tipoUsuario) values ('$nomeUsuario', '$sobrenomeUsuario', '$emailUsuario', '$senhaUsuario', '$tipoUsuario')";

        if ($query) {
            $sql = "SELECT * FROM usuario WHERE  emailUsuario = '$emailUsuario' and senhaUsuario = '" . $senhaUsuario . "'";
            $buscarUser = mysqli_query($connection, $sql);

            if (mysqli_num_rows($buscarUser) > 0) {
                while ($fetch = mysqli_fetch_row($buscarUser)) {
                    $_SESSION ['nomeUsuario'] = $fetch[1];
                    $_SESSION ['idUsuario'] = $fetch[0];
                    $_SESSION['login'] = "ok";
                    $_SESSION ['sobrenomeUsuario'] = $fetch[2];
                    $_SESSION ['senhac'] = $fetch[4];
                    $_SESSION ['senhas'] = $senhas;
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
            //echo "Verifique se todos os campos foram inseridos corretamente";
            header("location: /alexandria/");
        }
    }
    if ($connection) {
        mysqli_close($connection);
    }
}
function endsWith($haystack, $needle) {
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }
    return (substr(substr($haystack, 0, -2), -$length, $length) === $needle);
}
?>
