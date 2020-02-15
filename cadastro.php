<?php

session_start();
include_once("conexao.php");

$nomeUsuario = $_POST['nomeUsuario'];
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
        echo $senhaUsuario."<br>";
        $senhaUsuario = md5($senhaUsuario);
        echo $senhaUsuario."<br>";
        $query = mysqli_query($connection, "INSERT INTO usuario (nomeUsuario, sobrenomeUsuario, emailUsuario, senhaUsuario, tipoUsuario) values ('$nomeUsuario', '$sobrenomeUsuario', '$emailUsuario', '$senhaUsuario', '$tipoUsuario')");

        //echo "INSERT INTO usuario (nomeUsuario, sobrenomeUsuario, emailUsuario, senhaUsuario, tipoUsuario) values ('$nomeUsuario', '$sobrenomeUsuario', '$emailUsuario', '$senhaUsuario', '$tipoUsuario')";

        if ($query) {
            //echo "Cadastro feito com sucesso";
            $_SESSION['nomeUsuario'] = $nomeUsuario;
            $_SESSION['sobrenomeUsuario'] = $sobrenomeUsuario;
            $_SESSION['emailUsuario'] = $emailUsuario;
            $_SESSION['senhaUsuario'] = $senhaUsuario;
            $_SESSION['tipoUsuario'] = $tipoUsuario;
            header("location: index.php");
        } else {
            //echo "Verifique se todos os campos foram inseridos corretamente";
            header("location: index.php");
        }
    }
    if ($connection) {
        mysqli_close($connection);
//			$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso. Faça seu login</p>";
        header("Location: index.php");
        //echo "tem conexao";
    } else {
//			$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
//			header("Location: teste.html");
        //echo "nao tem conexao";
    }
}
?>
