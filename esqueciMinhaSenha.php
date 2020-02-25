<?php
session_start();
if (!$_SESSION) {
    header("Location: acessNegado.php");
} else {
    if (!strcmp($_SESSION['login'], "ok") == 0) {
        header("Location: acessNegado.php");
    }
}
if ($_POST && $_POST['emailUser'] && isset($_POST['emailUser'])) {
    $pagina = $_GET['page'];
    $emailUsuario = $_POST['emailUser'];
    require_once './conexao.php';
    if ($connection) {
        $sql = "SELECT * FROM usuario WHERE  emailUsuario = '$emailUsuario'";
//        echo $sql;
        $buscarUser = mysqli_query($connection, $sql);

        //tem o emal
        if (mysqli_num_rows($buscarUser) > 0) {
            header("Location: contatar/sendMail.php?motivo=forgetPassword&assunto=EsqueciMinhaSenha&para=" . $emailUsuario . "&page=" . $pagina . "?mensagem=1");
        } else {//o email informado nao esta no sistema
            header("Location: /alexandria/index.php?mensagem=2");
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