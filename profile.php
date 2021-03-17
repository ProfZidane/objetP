<?php include('includes/header_2.php'); ?>

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
          <div class="collapse navbar-collapse justify-content-end col flex-fill px-0"><a href="https://themes.getbootstrap.com/product/leap-multipurpose-bootstrap-theme/" class="btn btn-primary ml-lg-3" >Deconnexion</a>


          
          </div>
        </div>
      </nav>
    </div>
    <!-- Mes infos -->
    <h3 class="text-center">Mon profile</h3>
    <section>
        <div class="container">
          <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
                <h5>Mes informations</h5>
              <dl class="row">
                <dt class="col-3 mb-2">Nom</dt>
                <dd class="col-9 mb-2"></dd>
                <dt class="col-3 mb-2">Prenom(s)</dt>
                <dd class="col-9 mb-2"></dd>
                <dt class="col-3 mb-2">Email</dt>
                <dd class="col-9 mb-2"></dd>
                <dt class="col-3 mb-2">Contact</dt>
                <dd class="col-9 mb-2"><a href="#"></a>
                </dd>
              </dl>
              <hr>

            </div>
            <div class="col">
              <div class="row justify-content-center">
                <div class="col-lg-11">
                  <div class="mb-4">
                    <h5>Modifier mon mot de passe</h5>
                  </div>
                  <form>
                    <div class="form-group" style="width: 50%;">
                        <input type="password" class="form-control form-control-md" id="input-group-example-md" aria-describedby="input-group-example-sm" placeholder="Ancien mot de passe">
                        <input type="password" class="form-control form-control-md" id="input-group-example-md" aria-describedby="input-group-example-sm" placeholder="Nouveau mot de passe">
                        <small id="input-group-help" class="form-text text-muted">**8 caracteres au moins.</small>
                        <input type="password" class="form-control form-control-md" id="input-group-example-md" aria-describedby="input-group-example-sm" placeholder="Confirmer le mot de passe"><br>
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- Mes infos -->

    <section class="bg-primary-alt">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h2>Card Blog - Audio</h2>
              <div class="row">
                <div class="col-md-12 col-lg-12">
                  <div class="card card-body bg-primary-2 text-light">
                    <div class="d-flex">
                      <a href="#" class="btn btn-lg btn-primary btn-round flex-shrink-0">
                        <img class="icon bg-white" src="assets/img/icons/theme/media/volume-full.svg" alt="volume-full icon" data-inject-svg />
                      </a>
                      <div class="ml-3">
                        <a href="#myposts" id="seeposts">
                          <h4 class="mb-1" >Voir mes annonces</h4>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
                <h2>Card Blog - Video</h2>
                <div class="row">
                  <div class="col-md-12 col-lg-12">
                    <div class="card card-body justify-content-between bg-primary-3 text-light">
                      <div class="d-flex position-relative">
                        <a href="#" class="btn btn-primary btn-round btn-lg flex-shrink-0">
                          <img class="icon bg-white" src="assets/img/icons/theme/media/play.svg" alt="play icon" data-inject-svg />
                        </a>
                        <div class="ml-3">
                          <a href="#newpost" id="addpost">
                            <h4 class="mb-1">Ajouter une annonce</h4>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </section>
    
    
    <section id="myposts" style="display: none;">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col">
              <h2>Mes annonces</h2>
              <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col-2">#</th>
                    <th scope="col-2">Type document</th>
                    <th scope="col-2">Nom</th>
                    <th scope="col-2">Prenom(s)</th>
                    <th scope="col-2">Statut</th>
                    <th scope="col-2">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>CNI/Attestation/Passport</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>remis</td>
                    <td><i class="fab fa-home"></i></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Extrait</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>Pas remis</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Diplome</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>remis</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </section>

    <section id="poster" class="min-vh-100 py-5" style="display: none;">
        <div class="container">
          <div class="row justify-content-center pt-6">
            <div class="col-lg-5 col-md-6">
              <div class="text-center mb-4">
                <h1 class="mb-2">Ajouter un post</h1>
                <span>Remplissez ces informations.</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <form class="wizard">
                <ul class="d-flex step-circles justify-content-center mb-5">
                  <li><a class="nav-link btn" href="#step-1">1</a>
                  </li>
                  <li><a class="nav-link btn" href="#step-2">2</a>
                  </li>
                  <li><a class="nav-link btn" href="#step-3">3</a>
                  </li>
                </ul>
                <div>
                  <div id="step-1" class="active">
                      <h3 class="text-center">Informations sur le document</h3>
                    <div class="row justify-content-center">
                      <div class="col-xl-4 col-lg-5 col-md-6">
                        <div class="form-group">
                            <select class="custom-select" >
                                <option >Type du document</option>
                                <option value="1">CNI/Attestation/Passport</option>
                                <option value="2">Diplôme</option>
                                <option value="3">Objet</option>
                            </select>
                            <img class="icon" src="assets/img/icons/interface/arrow-caret.svg" alt="arrow-caret interface icon" data-inject-svg />
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Nom sur le document">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Prenom(s) sur le document">
                        </div>
                        <button class="btn btn-primary sw-btn-next btn-block">Next</button>
                      </div>
                    </div>
                  </div>
                  <div id="step-2" class="">
                    <h3 class="text-center">Informations sur lieu</h3>
                    <div class="row justify-content-center">
                      <div class="col-xl-4 col-lg-5 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Lieu de trouve">
                          </div>
                        <div class="form-group">
                          <input type="text" data-flatpickr class="form-control" placeholder="Date de trouve">
                        </div>
                        <hr>
                        <div>
                          <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                            <label class="custom-control-label" for="customSwitch1">C'est moi qui l'ai trouvé</label>
                          </div>
                        </div>
                        <hr>
                        <button class="btn btn-primary sw-btn-next btn-block">Next</button>
                      </div>
                    </div>
                  </div>
                  <div id="step-3" class="">
                    <h3 class="text-center">Informations facultatives</h3>
                    <div class="row justify-content-center">
                      <div class="col-xl-4 col-lg-5 col-md-6">
                        <div class="form-group">
                          <div class="form-group">
                            <img class="icon" src="assets/img/icons/interface/arrow-caret.svg" alt="arrow-caret interface icon" data-inject-svg />
                          </div>
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" placeholder="Circonstances de trouve" rows="5"></textarea>
                        </div>
                        <hr>
                        <div>
                          <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="custom-checkbox-example-1" required>
                            <label class="custom-control-label" for="custom-checkbox-example-1">J'ai lu les termes & condition et j'accepte</label>
                          </div>
                        </div>
                        <hr>
                        <button class="btn btn-primary btn-block" type="submit">Publier</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
    </section>
    

    

    <section class="p-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-6 col-lg-7 col-md-8 mb-lg-n7 layer-2">
            <img src="assets/img/saas-1.svg" alt="Image" data-aos="fade-up">
          </div>
        </div>
      </div>
    </section>
    
    
<?php include('includes/footer.php'); ?>