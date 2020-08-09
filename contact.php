<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Contact</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
  <link rel='stylesheet' type='text/css' media='screen' href='css/style2.css'>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }
  </style>
  
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="index.html">
        <img src="img/teslaLogoBlanc.png" alt="logo" />
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    
  </nav>
  <!-- Navbar -->
  <div id="col-6" class="contactMain">
    <section id="video">

      <video muted autoplay src="pubTesla.mp4"   poster="">
      Cette vidéo ne peut être affichée sur votre navigateur Internet.<br>
      Une version est disponible en téléchargement sous <a href="URL">#</a> . 
      </video>
    </section>

    <section id="contact">
      <h2>Vous souhaitez faire un essai?</h2>
        <p>
      Laissez nous vos coordonnées afin de pouvoir vous contacter dans les plus brefs délais.
        </p>

	  <form id="myform" method="post" action="formulaire.php">
      <fieldset>
    <p><label for="nom">Nom :</label><input type="text" id="nom" name="LNAME" value="" tabindex="1" /></p>
    <p><label for="prenom">Prénom :</label><input type="text" id="prenom" name="FNAME" value="" tabindex="2" /></p>
		<p><label for="email">Email :</label><input type="email" id="email" name="EMAIL" value="" tabindex="3" /></p>
    <p><label for="phone">Téléphone :</label><input type="phone" id="phone" name="PHONE" value="" tabindex="4" /></p>
    <input id="btnSubmit" type="submit" name="envoi" value="Valider" />
      </fieldset>
    </form>
    </section>
  </div>

  <!-- Footer -->
<footer class="page-footer font-small #1C2331 pt-4">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase"><img src="img/teslaLogoBlanc.png"></h5>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Contact</h5>

      <ul class="list-unstyled">
        <li>
          <a href= "contact.php">Nous contacter</a>
        </li>
       
      </ul>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Liens</h5>

      <ul class="list-unstyled">
        <li>
          <a href= "https://gmail.us17.list-manage.com/unsubscribe?u=4dd38927685c8bae4d310ecd8&id=c58468f099">Se désabonner</a>
        </li>
      </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="#"> Murello Albane & Galy Céline</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
  <!-- SCRIPTS -->
  
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
 
</body>

</html>

