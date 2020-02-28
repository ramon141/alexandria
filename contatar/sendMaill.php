<?php
session_start();
if(!$_SESSION){
            header("Location: ../acessNegado");
    } else {
        if(!strcmp($_SESSION['login'], "ok") == 0){
            header("Location: ../acessNegado");
        }
    }
if ($_GET && isset($_GET['adress']) && isset($_GET['mensagem']) && isset($_GET['nome']) && isset($_GET['assunto']) && isset($_GET['motivo']) && isset($_GET['page'])) {
    require_once './phpmailer/PHPMailerAutoload.php';
    
    $addAdress = $_GET['adress'];
    $page = $_GET['page'];
    $mensagem = $_GET['mensagem'];
    $nome = $_GET['nome'];
    $motivo = $_GET['motivo'];
    $assunto = $_GET['assunto'];
    
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mail->SMTPDebug = 2;
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->SMTPAuth = true;


    $mail->Username = 'alexandria.curso@gmail.com';
    $mail->Password = 'qzlhashjedfdvfdk';


    $mail->setFrom('alexandria.curso@gmail.com', 'Alexandria');
    
    if(strcmp($motivo, "contato") == 0){
        $mail->addAddress("alexandria.curso@gmail.com");
    } else {
        $mail->addAddress($addAdress);
    }
    
    $mail->Subject = $assunto;
    
    $mail->Body = '
                Mensagem de Contato<br><br>
                Nome: '.$nome.'
                Email: '.$addAdress.'
                Mensagem: "'.$mensagem.'"<br><br>
                Fim da mensagem de contato
            ';

    if ($mail->send()) {
        if(strcmp($motivo, "contato") == 0){
            $link = "Location: sendMail?adress=". $addAdress . "&mensagem=".$nome."&assunto=".$assunto."motivo=enviar";
            echo $link;
            //header($link);
        } else {
            //header("Location: " . $page . "?mensagem=1");
        }
    } else {
        echo "Deu algum erro";
    }
} else {
    echo "Parametros inválidos";
}