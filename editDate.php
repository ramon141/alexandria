<?php
session_start();
if (!$_SESSION) {
    header("Location: acessNegado");
} else {
    if (!strcmp($_SESSION['login'], "ok") == 0) {
        header("Location: acessNegado");
    }
}

if ($_POST && isset($_POST['senhajs']) && strcmp($_POST['senhajs'], $_SESSION['senhas']) == 0) {
    if ($_GET && $_POST && isset($_POST['ok']) && strcmp($_POST['ok'], "ok") == 0 && strcmp($_GET['m'], "d") == 0) {
        require_once './conexao.php';
        $sql = "DELETE FROM `usuario` WHERE `usuario`.`idUsuario` = " . $_SESSION['idUsuario'] . ";";
        mysqli_query($connection, $sql);
        $sql = "DELETE FROM `pagamento` WHERE `usuario_idUsuario` = " . $_SESSION['idUsuario'] . ";";
        mysqli_query($connection, $sql);
        $sql = "DELETE FROM `userresp` WHERE `usuario_idUsuario` = " . $_SESSION['idUsuario'] . ";";
        mysqli_query($connection, $sql);

        if ($connection) {
            mysqli_close($connection);
            header("Location: /alexandria/logout");
        }
    } else {
        if ($_POST && isset($_POST['ok']) && strcmp($_POST['ok'], "ok") == 0) {
            require_once './conexao.php';
            $sql = "UPDATE `usuario` SET `nomeUsuario` = '" . $_POST['nomeNova'] . "', `sobrenomeUsuario` = '" . $_POST['sobrenomeNova'] . "', `emailUsuario` = '" . $_POST['emailNova'] . "', `senhaUsuario` = '" . md5($_POST['senhaNova']) . "' WHERE `usuario`.`idUsuario` = " . $_SESSION ['idUsuario'];
            mysqli_query($connection, $sql);

            $_SESSION ['nomeUsuario'] = $_POST['nomeNova'];
            $_SESSION['emailUsuario'] = $_POST['emailNova'];
            $_SESSION ['sobrenomeUsuario'] = $_POST['sobrenomeNova'];
            $_SESSION ['senhac'] = md5($_POST['senhaNova']);
            $_SESSION ['senhas'] = $_POST['senhaNova'];
            
            echo "<script>alert('".$_SESSION ['senhas']."')</script>";
            
            $idUsuario = $fetch[0];
            echo $sql;
            if ($connection) {
                mysqli_close($connection);
               header("Location: /alexandria/");
            }
        }
    }
} else if(isset($_POST) && isset($_POST['ok']) && strcmp($_POST['ok'], "ok") == 0){
    
    echo "<script>alert('A está incorreta, digite novamente')</script>";
}
?>


<html>
    <head>
        <title>Confirmar a senha</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    </head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>





    <body>
        <!--modal confirmar senha-->
        <div class="modalCS" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <?php
                    if ($_GET && isset($_GET['m']) && strcmp($_GET['m'], "d") == 0) {
                        echo '<form action="editDate?m=d" method="post" id="form" onsubmit="">';
                    } else {
                        echo '<form action="editDate" method="post" id="form" onsubmit="">';
                    }
                    ?>
                    <div class="modal-header">
                        <h5 class="modal-title">Só mais um passo...</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <span>Digite sua senha para efetuar as modificações</span><br>
                        <br>
                        <input class="input-group" type="hidden" name="nomeNova" value="<?php if (isset($_POST['nomeNova'])) echo $_POST['nomeNova']; ?>">
                        <input class="input-group" type="hidden" name="sobrenomeNova" value="<?php if (isset($_POST['sobrenomeNova'])) echo $_POST['sobrenomeNova']; ?>">
                        <input class="input-group" type="hidden" name="emailNova" value="<?php if (isset($_POST['emailNova'])) echo $_POST['emailNova']; ?>">
                        <input class="input-group" type="hidden" name="senhaNova" value="<?php if (isset($_POST['senhaNova'])) echo $_POST['senhaNova']; ?>">
                        <input type="hidden" value="ok" name="ok">
                        <input class="input-group" id="senhajs" name="senhajs" type="password">
                        <?php
                        if ($_GET && isset($_GET['m']) && strcmp($_GET['m'], "d") == 0) {
                            echo "<span style='color: red; font-weight: bold;'>*Você estará excluindo sua conta permanentemente</span>";
                        }
                        ?>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Efetuar mudanças</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--fim do modal de confirmar senha-->
    </body>
</html>
