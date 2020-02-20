<?php

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
            if (endsWith($pagina, "mensagem")) {
                header("Location: ".substr($pagina, 0, -1)."1");
            } else {
                header("Location: " . $pagina . "mensagem=1");
            }
        } else {//o email informado nao esta no sistema
            if (endsWith($pagina, "mensagem")) {
                header("Location: ".substr($pagina, 0, -1)."2");
            } else {
                header("Location: " . $pagina . "mensagem=2");
            }
        }

//  
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