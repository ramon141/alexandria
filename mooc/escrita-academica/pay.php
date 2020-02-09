<?php 
session_start();
if(isset($_SESSION['nomeUsuario'])){
  $loginUser = $_SESSION['nomeUsuario'];
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Alexandria</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <link rel="shortcut icon" type="image/x-icon" href="img/alexandria-logo.jpeg">
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/gijgo.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/slicknav.css">
  <link rel="stylesheet" href="css/style.css">
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
                <a href="index.php">
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
          <form method="POST" action="pagamento.php">
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
            <a href="index.php">Cancelar e voltar</a>
          </fieldset>
        </form>  
      </div>

    </div>
  </section>
  <!--================Blog Area =================-->


  <!-- form itself end -->
  <!-- JS here -->
  <script src="js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/ajax-form.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/scrollIt.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/nice-select.min.js"></script>
  <script src="js/jquery.slicknav.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/gijgo.min.js"></script>

  <!--contact js-->
  <script src="js/contact.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>

  <script src="js/main.js"></script>
</body>
</html>