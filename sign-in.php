<?php include('includes/header_2.php'); ?>


  <section class="row no-gutters min-vh-100 p-0">
      <div class="col-lg-4 bg-primary-3 d-flex justify-content-end">
        <img src="assets/img/article-9.jpg" alt="Image" class="bg-image">
        <div class="divider divider-vertical d-none d-lg-block">
          <img src="assets/img/dividers/divider-vertical-1.svg" alt="graphical divider" data-inject-svg />
        </div>
      </div>
      <div class="col px-5 position-relative d-flex align-items-center">
        <div class="row justify-content-center w-100">

          <div class="container">
            <?php if (isset($_GET['error'])) { ?>
              <?php if ($_GET['error'] === "passwordError") { ?>
                <div class="alert alert-danger">
                  Votre mot de passe est incorrect !
                </div>
              <?php } ?>
            <?php } ?>
          </div>
          
          <div class="col-md-8 col-lg-7 col-xl-6">
            <div class="text-center mb-4">
              <h1 class="mb-1">Connectez-vous à votre compte</h1>
            </div>
            <form action="controllers/UserControllers/login_user.php" method="POST">
                <div class="form-group">
                  <input type="email" name="login-email" placeholder="Adresse email" class="form-control">
                </div>
                <div class="form-group">
                  <input type="password" name="login-password" placeholder="Mot de passe" class="form-control">
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
                  <span>Vous n'avez de compte ? <a href="Inscription.html">Creez-en un !</a>
                  </span>
                </div>
            </form>
          </div>
        </div>
      </div>
    </section> 

   
<?php include('includes/footer_2.php'); ?>