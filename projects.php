<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NOOB - Nos Projets</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Nos projets récents" name="description">
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Raleway:400,300,700,900" rel="stylesheet">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">N<i class="fa fa-circle"></i><i class="fa fa-circle"></i>B</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Accueil</a></li>
                    <li><a href="about.php">Équipe</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li class="active"><a href="projects.php">Projets</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Header -->
    <div id="headerwrap">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-8 col-lg-offset-2">
                    <h1>Nos Réalisations</h1>
                    <h2>Chaque projet est une aventure unique</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Projects Section -->
    <div class="container w">
        <div class="row centered">
            <h3>Découvrez nos projets</h3>
            <p>Voici une sélection de nos projets récents. Cliquez pour plus de détails.</p>
        </div>
        <div class="row">
            <?php
            // Dynamically include project components
            if (!isset($_GET["project"])) {
                include('projects/project1.php');
            } else {
                $projectPath = 'projects' . $_GET["project"];
                if (file_exists($projectPath)) {
                    include($projectPath);
                } else {
                    echo "<p>Projet demandé introuvable.</p>";
                }
                include($projectPath);
            }
            ;
            // Add more as needed
            ?>
        </div>
    </div>

    <!-- Footer -->
    <div id="f">
        <div class="container">
            <div class="row centered">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div id="copyrights">
        <div class="container">
            <p>&copy; Copyrights <strong>NOOB</strong>. All Rights Reserved</p>
            <div class="credits">Créé par NOOB</div>
        </div>
    </div>

    <!-- JS -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>