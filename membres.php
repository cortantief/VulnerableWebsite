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
          <li class="active"><a href="index.php?page=accueil.php">Accueil</a></li>
          <li><a href="index.php?page=about.php">Équipe</a></li>
          <li><a href="index.php?page=services.php">Services</a></li>
          <li><a href="index.php?page=works.php">Travaux</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

  <?php
  if(!isset($_GET['id']) || $_GET['id'] == ''){
  	header('Location: index.php');
  }
 $bdd = new PDO('mysql:host=127.0.0.1;dbname=noob;charset=utf8', 'noob', 'noob');
$reponse = $bdd->query("SELECT * FROM users WHERE id=".$_GET['id']);
$data = $reponse->fetch();
?>
  <div id="blue">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2">
          <h4><?php echo $data['prenom']?></h4>
          <p><?php echo $data['nom']?></p>
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
        <img class="img-circle" src='<?php echo $data["image"] ?>' width="110" height="110" alt="">
        <h4><?php echo "Prenom : " . $data['prenom']; ?></h4>
        <h4><?php echo "Nom : " . $data['nom']; ?></h4>
        <p><?php echo "Bio : " . $data['bio']; ?></p>
      </div>
      <!-- col-lg-3 -->

      <!-- col-lg-3 -->

    </div>
    <!-- row -->
    <br>
    <br>
  </div>
  <!-- container -->


  <!-- PORTFOLIO SECTION -->

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
