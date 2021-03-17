<?php include('includes/header_2.php'); ?>

    <section class="min-vh-100 py-5">
      <div class="container">
        <div class="row justify-content-center mb-md-6">
          <div class="col-auto">
            <a href="index.html">
              <img src="assets/img/logo.svg" alt="Leap">
            </a>
          </div>
        </div>
        <div class="row justify-content-center pt-6">
          <div class="col-xl-4 col-lg-5 col-md-6">
            <div class="text-center mb-4">
              <h1 class="mb-1">Mot de passe oublié</h1>
              <span>Entrer vos informations pour recevoir un lien de renitialisation</span>
            </div>
            <form>
              <div class="form-group">
                <input type="email" name="forgot-password-email" placeholder="Addresse Email" class="form-control">
              </div>
              <div class="form-group">
                <button class="btn-block btn btn-primary" type="submit">Envoyer le lien</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    
<?php include('includes/footer_2.php'); ?>