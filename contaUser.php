<?php
session_start();
if (!$_SESSION) {
    header("Location: acessNegado");
} else {
    if (!strcmp($_SESSION['login'], "ok") == 0) {
        header("Location: acessNegado");
    }
}
if (isset($_SESSION['nomeUsuario'])) {
    $loginUser = $_SESSION['nomeUsuario'];
    $sobrenomeUser = $_SESSION['sobrenomeUsuario'];
}
if (isset($_SESSION['emailUsuario'])) {
    $emailUser = $_SESSION ['emailUsuario'];
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Configurações da Conta - Alexandria</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="manifest" href="site.webmanifest"> -->
        <link rel="shortcut icon" type="image/x-icon" href="img/alexandria-logo.jpeg">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS here -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <?php include 'navbar.php' ?>


        <!--================Blog Area =================-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title mb-100">
                            <fieldset style="width:70%;">
                                <form method="POST" action="editDate">
                                    <br> 
                                    <h2>Informações de Perfil</h2> <span style="color: red;">*Qualquer campo não preenchido será mantida a informação anterior</span> <br>
                                    <br>
                                    <label style= "color: #4682b4;" for="lname">Nome</label>  
                                    <input type="text" class="form-control input-lg" placeholder="Digite seu nome" name="nomeNova" value="<?php echo $loginUser; ?>">
                                    <br>

                                    <label style= "color: #4682b4;" for="lname">Sobrenome</label>  
                                    <input type="text" class="form-control input-lg" placeholder="Digite seu sobrenome" name="sobrenomeNova" value="<?php echo $sobrenomeUser; ?>">
                                    <br>


                                    <label style= "color: #4682b4;" for="lname">E-mail</label>
                                    <?php
                                    echo "
                                <input type='text' class='form-control input-lg' placeholder='alexandria.curso@gmail.com' value='$emailUser' name='emailNova'>";
                                    ?> 
                                    <br>
                                    <label style= "color: #4682b4;" for="lname">Nova Senha</label>  
                                    <input type="password" class="form-control input-lg" placeholder="Nova senha" name="senhaNova" value="<?php echo $_SESSION['senhas'] ?>">
                                    <br>
                                    <label style= "color: #4682b4;" for="lname">Confirmar nova senha</label>
                                    <input type="password" class="form-control input-lg" placeholder="Nova senha" name="confirmarSenha" value="<?php echo $_SESSION['senhas'] ?>">
                                    <br>
                                    <center>
                                        <input style="width:25%; background-color: #4682b4; color: white; padding: 14px 20px;  border: none; border-radius: 4px; cursor: pointer;" type="submit" value="Salvar alterações">
                                    </center> 
                                    <br><br>
                                </form>
                                <br> <h2>Excluir Conta</h2>
                                <p>Encerre sua conta permanentemente.</p> <br>
                                <p>Aviso: Se encerrar sua conta, você será descadastrado de seu curso e perderá o acesso para sempre.</p>
                                <a href="editDate?m=d">
                                    <input  class="btn btn-danger" type="submit" name="nomeConf" value="Excluir Conta" >
                                </a>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->



        <!-- form itself end -->
        <!-- JS here -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.js"></script>
        <script src="https://use.fontawesome.com/188494abaf.js"></script>
    </body>
</html>