<?php session_start(); ?>
<!doctype html>
<html lang="fr">

  
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-52115242-16"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-52115242-16');
    </script>
    <!-- Google Tag Manager -->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-KG38NH9');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <title>Objet Perdu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A corporate Bootstrap theme by Medium Rare">
    <style>
      @keyframes hideLoader{0%{ width: 100%; height: 100%; }100%{ width: 0; height: 0; }  }  body > div.loader{ position: fixed; background: white; width: 100%; height: 100%; z-index: 1071; opacity: 0; transition: opacity .5s ease; overflow: hidden; pointer-events: none; display: flex; align-items: center; justify-content: center;}body:not(.loaded) > div.loader{ opacity: 1;}body:not(.loaded){ overflow: hidden;}  body.loaded > div.loader{animation: hideLoader .5s linear .5s forwards;  } /* Typing Animation */.loading-animation {width: 6px;height: 6px;border-radius: 50%;animation: typing 1s linear infinite alternate;position: relative;left: -12px;}@keyframes typing {0% {background-color: rgba(100,100,100, 1);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 0.2);}25% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 2),24px 0px 0px 0px rgba(100,100,100, 0.2);}75% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 1);}}
    </style>
    <script type="text/javascript">
      window.addEventListener("load", function () {    document.querySelector('body').classList.add('loaded');  });
    </script>
    <link href="assets/css/theme-saas.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets/css/theme-coworking.min.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="preload" as="font" href="assets/fonts/Inter-UI-upright.var.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="assets/fonts/Inter-UI.var.woff2" type="font/woff2" crossorigin="anonymous">
  </head>

  <body>
    <!-- Animation au chargement -->
    <div class="loader">
      <div class="loading-animation"></div>
    </div>
    <!-- Animation au chargement -->

    <!-- La navbar -->
    <div class="navbar-container ">
      <nav class="navbar navbar-expand-lg justify-content-between navbar-light border-bottom-0 bg-white" data-sticky="top">
        <div class="container">
          <div class="col flex-fill px-0 d-flex justify-content-between">
            <a class="navbar-brand mr-0 fade-page" href="index.html">
              Objet Perdu
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <img class="icon navbar-toggler-open" src="assets/img/icons/interface/menu.svg" alt="menu interface icon" data-inject-svg />
              <img class="icon navbar-toggler-close" src="assets/img/icons/interface/cross.svg" alt="cross interface icon" data-inject-svg />
            </button>
          </div>
          <div class="collapse navbar-collapse col px-0 px-lg-2 flex-fill">
            <div class="py-2 py-lg-0">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">Accueil</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">Rechercher</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">Declarer</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">A Propos</a>
                </li>
              </ul>
            </div>
          </div>
            <?php if (!isset($_SESSION['nom']) && !isset($_SESSION['prenom'])) { ?>
              <div class="collapse navbar-collapse justify-content-end col flex-fill px-0"><a href="https://themes.getbootstrap.com/product/leap-multipurpose-bootstrap-theme/" class="btn btn-primary ml-lg-3" data-toggle="modal" data-target="#sign-in-modal">Mon compte</a>
            <?php } ?>          

            <?php if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) { ?>
              <?php if ($_SESSION['nom'] !== '' && $_SESSION['prenom'] !== '') { ?>
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?= $_SESSION['nom'] . ' ' . $_SESSION['prenom'] ?>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="controllers/UserControllers/logout_user.php">Déconnexion</a>                    
                  </div>
                </div>
              <?php } ?>
            <?php } ?>
          </div>
        </div>
      </nav>
    </div>
    <!-- La navbar -->

     <!-- Le modal de connexion -->
    <div class="modal fade" id="sign-in-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <img class="icon bg-dark" src="assets/img/icons/interface/cross.svg" alt="cross interface icon" data-inject-svg />
            </button>
            <div class="m-xl-4 m-3">
              <div class="text-center mb-4">
                <h4 class="h3 mb-1">Connectez-vous pour acceder à votre compte</h4>
                <span>Entrez vos coordonnées de compte</span>
              </div>
              <form action="controllers/UserControllers/login_user.php" method="POST">
                <div class="form-group">
                  <input type="email" name="login-email" placeholder="Adresse email" class="form-control" required>
                </div>
                <div class="form-group">
                  <input type="password" name="login-password" placeholder="Mot de passe" class="form-control" required>
                  <small><a href="#">Mot de passe oublié ?</a>
                  </small>
                </div>
                <div class="form-group">
                  <button class="btn-block btn btn-primary" name="submit" type="submit">Connexion</button>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="login-remember">
                  <label class="custom-control-label text-small text-muted" for="login-remember">Se souvenir de moi</label>
                </div>
                <hr>
                <div class="text-center text-small text-muted">
                  <span>Vous n'avez de compte ? <a href="sign-up.php">Créez-en un !</a>
                  </span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Le modal de connexion -->