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
          <div class="col-md-8 col-lg-7 col-xl-6">
            <div class="text-center mb-4">
              <h1 class="mb-1">Créer un compte</h1>
            </div>
            <form action="controllers/UserControllers/insert_user.php" method="POST">
              <div class="form-group">
                <input type="text" name="signup-name" placeholder="Nom" class="form-control" required>
              </div>
              <div class="form-group">
                <input type="text" name="signup-prenom" placeholder="Prénom(s)" class="form-control" required>
              </div>
              <div class="form-group">
                <input type="email" name="signup-email" placeholder="Adresse Email" class="form-control" required>
              </div>
              <div class="form-group">
                <input type="text" name="signup-num" placeholder="Numéro de téléphone" class="form-control" required>
              </div>
              <div class="form-group">
                <input type="password" id="password" name="signup-password" placeholder="Mot de passe" class="form-control" required>
                <small class="text-muted">(Au moins 8 caractères)</small>
              </div>
              <div class="form-group">
                <input type="password" id="password-confirm" name="signup-password-confirm" placeholder="Confirmez le mot de passe" class="form-control" required>
                <small id="message-confirm"></small>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="signup-agree" required>
                <label class="custom-control-label text-small text-muted" for="signup-agree">J'accepte les <a href="#">Termes &amp;
          Conditions</a>
                </label>
              </div>
              <div class="form-group mt-4">
                <button class="btn-block btn btn-primary" name="submit" type="submit">S'inscrire</button>
              </div>
              
              <hr>
              <div class="text-center text-small text-muted">
                <span>
                  Vous avez déja un compte ? <a href="sign-in.php">Connectez-vous</a>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section> 

    <script src="assets/js/ownJs/app.js"></script>

    <?php include('includes/footer_2.php'); ?>