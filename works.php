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
          <h4>ON TRAVAIL DUR POUR ACCOMPLIR L'EXCELLENCE</h4>
          <p>Et nous en sommes content</p>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!--  bluewrap -->

<div>

</div>
  <div class="container desc">
  <?php 
   $bdd = new PDO('mysql:host=127.0.0.1;dbname=noob;charset=utf8', 'noob', 'noob');
   $reponse = $bdd->query("SELECT * FROM work");
   while ($data = $reponse->fetch(PDO::FETCH_ASSOC)) {
    ?>

<div class="row">
      
      <br><br>
      <div class="col-lg-6 centered">
        <img src="<?php echo htmlspecialchars($data['image']); ?>" alt="">
      </div>
      <!-- col-lg-6 -->

      <div class="col-lg-6">
        <h4><?php echo htmlspecialchars($data['title']); ?></h4>
        <p><?php echo htmlspecialchars($data['description']); ?></p>
        <p>
          <?php
          foreach($data['feature'] as $feature) {

          ?>
          <i class="fa fa-circle-o"></i> <?php echo htmlspecialchars($data['feature']); ?> <br/>
          <?php
          }
          ?>
        </p>
      </div>
    </div>
<?php
  }

  ?>

    <!-- row -->

 
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/chart/chart.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>