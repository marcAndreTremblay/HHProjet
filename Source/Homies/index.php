<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Homies Concours</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Homies Concours</a>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Formulaire</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Photos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
      <div class="header-content">
        <div class="header-content-inner">
          <h1 id="homeHeading">TIRAGE AUTOMNE 2017</h1>
          <hr>
          <p>Courez la chance de gagner une passe de saison pour le valinouet!</p>
          <a class="btn btn-default btn-xl js-scroll-trigger" href="#about">Remplir concours</a>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Explication du tirage</h2>
            <hr class="light">
            <p class="text-faded">Pour la période automnale, nous faisons tirer 2 passes de saisons pour le Valinouet et le Mont Bélu, pour être éligible vous devez avoir acheté un certain montant en magasin et soumettre votre participation dans le formulaire ci-desous</p>
            <a class="btn btn-default btn-xl js-scroll-trigger" href="#services">Remplir formulaire</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Formulaire d'inscription</h2>
            <hr class="primary">
          </div>
        </div>
      </div>
      <div class="container">
      	<?php include 'send_post.php';?>
      	<form method="post" action="send_post.php">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-pencil text-primary sr-icons"></i>
              <h3>Prénom</h3>
              <input type="text" class="form-control" name"fname">
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-pencil text-primary sr-icons"></i>
              <h3>Nom</h3>
              <input type="text" class="form-control"  name"lname">
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-envelope text-primary sr-icons"></i>
              <h3>Courriel</h3>
              <input type="email" class="form-control"  name"email">
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-globe text-primary sr-icons"></i>
              <h3>Montagne</h3>
                <select class="form-control"  name"mont">

    				<option>Valinouet</option>

    				<option>Mont Bélu</option>

 				</select>
            </div>
          </div>
        </div>
        <div class="row">
			<br>
			<br>
		<div class="col-lg-10 style="margin-right:100px;padding-bottom:10px;>
			<br>
			<div class="checkbox">	
				<input type="checkbox" name="checkbox" value="check" id="agree" /> J'accepte de recevoir des offres promotionnelles par e-mail, en cochant la case prévue à cet effet
			</div>
		</div>	
			<br>
			<br>
			<br>
        </div>
        <div class="row">
        	<div class="col-lg-12 text-center">
        		<button class="btn btn-primary btn-lg" type="submit" value="Submit" name="submit">Soumettre</button>
        	</div>	
        </div>
      </form>  
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
          <div class="col-lg-4 col-sm-6" onMouseOver="this.style.backgroundColor='#F8F8F8'" onMouseOut="this.style.backgroundColor='#FFFFFF'">
            <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg" onMouseOver="this.style.backgroundColor='#F8F8F8'" onMouseOut="this.style.backgroundColor='#FFFFFF'">
              <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="" onMouseOver="this.style.backgroundColor='#F8F8F8'" onMouseOut="this.style.backgroundColor='#FFFFFF'">

            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">

            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">

            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">

            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
 
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">

            </a>
          </div>
        </div>
      </div>
    </section>

    <div class="call-to-action bg-dark">
      <div class="container text-center">
        <h2>Visitez notre Site Web</h2>
        <a class="btn btn-default btn-xl sr-button" href="https://boutiquehomies.com/">Voir le site</a>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
