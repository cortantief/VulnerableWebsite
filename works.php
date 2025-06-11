<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>NOOB - Dynamic Start-up</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Raleway:400,300,700,900" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="#">N<i class="fa fa-circle"></i><i class="fa fa-circle"></i>B</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="/">Accueil</a></li>
          <li><a href="about.php">Équipe</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="works.php">Travaux</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

  <div id="blue">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2">
          <h4>NOTRE ÉQUIPE</h4>
          <p>ON EST COOL!</p>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!--  bluewrap -->


  <div class="container w">
    <div class="row centered">
      <br><br>
      <div class="col-lg-3">
        <img class="img-circle" src="img/pic.jpg" width="110" height="110" alt="">
        <h4>Homer Simpson</h4>
        <p>C'est pas parce que je m'en fous que je comprends pas.</p>
        <p><a href="index.php?page=membres.php&id=1">@Homer</a></p>
      </div>
      <!-- col-lg-3 -->

      <div class="col-lg-3">
        <img class="img-circle" src="img/pic2.jpg" width="110" height="110" alt="">
        <h4>Marge Simpson</h4>
        <p>Quand une femme dit que tout va bien, ça veut dire que tout va mal.</p>
        <p><a href="index.php?page=membres.php&id=2">@Marge</a></p>
      </div>
      <!-- col-lg-3 -->

      <div class="col-lg-3">
        <img class="img-circle" src="img/pic3.jpg" width="110" height="110" alt="">
        <h4>Montgomery Burns</h4>
        <p>Famille, religion, amitié. Voici les 3 démons que vous devez abattre pour réussir dans les affaires.</p>
        <p><a href="#">@Mark_BlackTie</a></p>
      </div>
      <!-- col-lg-3 -->

      <div class="col-lg-3">
        <img class="img-circle" src="img/pic4.jpg" width="110" height="110" alt="">
        <h4>Moe Szyslak</h4>
        <p>On pourrait vendre de l'alcool. Je fais ça très bien.</p>
        <p><a href="#">@Moe</a></p>
      </div>
      <!-- col-lg-3 -->

    </div>
    <!-- row -->
    <br>
    <br>
  </div>
  <!-- container -->


  <!-- PORTFOLIO SECTION -->
  <div id="dg">
    <div class="container">
      <div class="row centered">
        <h4>NOS COMPETENCES</h4>
        <br>

        <!-- First Chart -->
        <div class="col-lg-3">
          <canvas id="canvas" height="130" width="130"></canvas>
          <br>
          <p><b>Design</b></p>
          <p><small>Marge dessine super bien.</small></p>
        </div>
        <!-- /col-lg-3 -->

        <!-- Second Chart -->
        <div class="col-lg-3">
          <canvas id="canvas2" height="130" width="130"></canvas>
          <br>
          <p><b>Developement WEB</b></p>
          <p><small>Nous sommes super compétent en sécurité de nos site web.</small></p>
        </div>
        <!-- /col-lg-3 -->

        <!-- Third Chart -->
        <div class="col-lg-3">
          <canvas id="canvas3" height="130" width="130"></canvas>
          <br>
          <p><b>SEO</b></p>
          <p><small>La meilleure des communications est assurée par Mr.Burns.</small></p>
        </div>
        <!-- /col-lg-3 -->

        <!-- Fourth Chart -->
        <div class="col-lg-3">
          <canvas id="canvas4" height="130" width="130"></canvas>
          <br>
          <p><b>Sécrurité</b></p>
          <p><small>Toutes nos applications sont incassables.</small></p>
        </div>
        <!-- /col-lg-3 -->


      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- DG -->

  <!-- FOOTER -->
  <div id="f">
    <div class="container">
      <div class="row centered">
        <a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>

      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- Footer -->

  <!-- /.modal -->

  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>NOOB</strong>. All Rights Reserved
      </p>
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/spot-bootstrap-freelance-template/
          Licensing information: https://templatemag.com/license/
        -->
        Créé par NOOB 
      </div>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/chart/chart.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>