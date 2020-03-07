<?php 
session_start();
if(!$_SESSION){
            header("Location: ../../acessNegado");
    } else {
        if(!strcmp($_SESSION['login'], "ok") == 0){
            header("Location: ../../acessNegado");
        }
    }
if(isset($_SESSION['nomeUsuario'])){
  $loginUser = $_SESSION['nomeUsuario'];
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Pagamento - Alexandria</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <link rel="shortcut icon" type="image/x-icon" href="/alexandria/img/alexandria-logo.jpeg">
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
        <link rel="stylesheet" href="../../css/style.css">
  <!-- <link rel="stylesheet" href="css/responsive.css"> -->

  <script language="JavaScript" type="text/javascript">
    function mascaraData(campoData){
      var data = campoData.value;
      if (data.length == 2){
        data = data + '/';
        document.forms[0].data.value = data;
        return true;              
      }
      if (data.length == 2){
        data = data + '/';
        document.forms[0].data.value = data;
        return true;              
      }
    }
    function mascaraNumCard(campoNumCard){
      var numCardUser = campoNumCard.value;
        if (numCardUser.length == 4) {
          numCardUser = numCardUser + '.';
          document.forms[0].numCardUser.value = numCardUser;
          return true;
        }
        if (numCardUser.length == 9) {
          numCardUser = numCardUser + '.';
          document.forms[0].numCardUser.value = numCardUser;
          return true;
        }
        if (numCardUser.length == 14) {
          numCardUser = numCardUser + '.';
          document.forms[0].numCardUser.value = numCardUser;
          return true;
        }              
    }
  </script>

</head>

<body>

  <!-- header-start -->
  <header>
    <div class="header-area ">
      <div id="sticky-header" class="main-header-area">
        <div class="container-fluid p-0">
          <div class="row align-items-center no-gutters">
            <div class="col-xl-2 col-lg-2">
              <div class="logo-img">
                <a href="/alexandria/">
                  <img src="img/logoAlexandria.png" alt="Alexandria" style="width:80px;height:80px;">
                </a>
              </div>
            </div>
            <div class="col-xl-10 col-lg-10">
              <div class="main-menu  d-none d-lg-block">
                <nav>
                  <h1 style="color: white; text-align: left;">Pagamento</h1>
                </nav>
              </div>
              <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </header>
    <!-- header-end -->

    <!-- bradcam_area_start -->
    <div style="background-color: #4682b4; padding:40px">
    </div>
    <!-- bradcam_area_end -->


    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
      <div class="container">

        <div class="section_title mb-100">
          <form method="POST" action="pagamento">
            <fieldset class="border border-primary" style="width:70%; background-color: 
            white; color: #4682b4; padding: 10px 40px; margin: 5px 200px; border-width: 10px; border-radius: 4px; cursor: pointer;" ><br> 
            <h2>Pague com seu cartão de crédito</h2> <br>
            <label style= "color: #4682b4;" for="lname">Número do Cartão</label> 

            <input type="text" class="form-control input-lg" placeholder="Número do cartão" name="numCardUser" onkeyup="mascaraNumCard(this);" maxlength="19"><br>

            <div class="row">
              <div class="col-md-6 col-xs-6">
                <label style= "color: #4682b4;" for="fname">Validade</label> 

                <input type="text" class="form-control input-lg" placeholder="Ex.: MM/YY" name="data" onkeyup="mascaraData(this);" maxlength="5"/>

                <br>
              </div>
              <div class="col-md-6 col-xs-6">
                <label style= "color: #4682b4;" for="fname">Código de Segurança</label>
                <input type="text" name="cvvCardUser" class="form-control input-lg" 
                placeholder="Apenas número" maxlength="3" ><br>
              </div>
            </div>
            <input style="width:40%; background-color: #4682b4; color: white; 
            padding: 14px 20px;  border: none; border-radius: 4px; cursor: 
            pointer;" type="submit" value="Finalizar Comprar"><br> <br>
            <a href="../escrita-academica/">Cancelar e voltar</a>
          </fieldset>
        </form>  
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