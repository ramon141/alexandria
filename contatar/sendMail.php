<?php
session_start();
if(!$_SESSION){
            header("Location: ../acessNegado");
    } else {
        if(!strcmp($_SESSION['login'], "ok") == 0){
            header("Location: ../acessNegado");
        }
    }
$sucesso = 0;
if ($_GET && isset($_GET['assunto']) && isset($_GET['para']) && isset($_GET['page'])) {

    $str = "Sem nada";
    $assunto = $_GET['assunto'];
    $para = $_GET['para'];
    if (isset($_GET['motivo']) && strcmp($_GET['motivo'], "forgetPassword") == 0) {
        $senhaAt = strtoupper(substr(md5(date("YmdHis")), 1, 7));
        $assunto = "Esqueci minha senha";
        $str = "<!DOCTYPE html><html lang='pt'><head><meta charset='UTF-8'><title>Alexandria | Suporte</title></head><body>"
                . "A sua senha atualizada é: $senhaAt"
                . "</body></html>";
        require_once '../conexao.php';
        mysqli_query($connection, "update usuario set senhaUsuario='".md5($senhaAt)."' where emailUsuario='".$para."'");
    }

    $de = "";
    

    $page = $_GET['page'];

    $pagecmp = $page;

    if (isset($_GET['motivo']) && strcmp($_GET['motivo'], "contato") == 0) {
        $para = "alexandria.curso@gmail.com";
        $de = $_GET['email'];
        $logo = 'img/logo.png';
        $nomec = $_GET['nome'];
        $menssage = $_GET['message'];
        $assunto = "Contato | $assunto";
        $str = "<!DOCTYPE html><html lang='pt'><head><meta charset='UTF-8'><title>Alexandria | Suporte</title></head><body>";
        $str .= "Mensagem de Contato<br><br>";
        $str .= "Nome: $nomec<br>";
        $str .= "Email: $de<br>";
        $str .= "Mensagem: \"$menssage\"<br><br>";
        $str .= "Fim da mensagem de contato";
        $str .= "</body></html>";

        $page = "sendMail?assunto=Recebemos seu E-mail&para=$de&page=$page&motivo=emaildevolta";
    }



    if (isset($_GET['motivo']) && strcmp($_GET['motivo'], "emaildevolta") == 0) {
        $str = "<!DOCTYPE html><html lang='pt'><head><meta charset='UTF-8'><title>Run Math | Suporte</title></head><body>";
        $str .= "Recebemos seu email e estamos felizes em contar com sua participação no projeto Run Math.<br>";
        $str .= "Continue assim e relate todos os erros que encontrar. Contamos com você!!";
        $str .= "</body></html>";
    }

    require_once './phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail->isSMTP();
    //$mail -> SMTPDebug = 2;
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'alexandria.curso@gmail.com';
    $mail->Password = 'qzlhashjedfdvfdk';
    $mail->setFrom("alexandria.curso@gmail.com", "Alexandria Suporte");
    $mail->addAddress("$para");
    $mail->Subject = "$assunto";

    $mail->msgHTML($str);

    $mail->AltBody = 'Erro ao carregar mensagem :(';



    if ($mail->send()) {
        if (strcmp($page, "sendMail?assunto=Recebemos seu E-mail&para=$de&page=$pagecmp&motivo=emaildevolta") == 0) {
            header("Location: $page");
        } else {
            if (endsWith($page, "mensagem")) {
                header("Location: $page");
            } else {
                header("Location: $page?sucesso=1");
            }
            
        }
        exit();
    } else {
        header("Location: $page?sucesso=0");
        exit();
    }
} else {
    
}
function endsWith($haystack, $needle) {
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }
    return (substr(substr($haystack, 0, -2), -$length, $length) === $needle);
}

?>