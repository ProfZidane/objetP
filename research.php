<?php include('includes/header_2.php'); ?>

    <div class="navbar-container ">
      <nav class="navbar navbar-expand-lg navbar-dark" data-overlay data-sticky="top">
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
                  <a href="#" class="nav-link active dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">Rechercher</a>
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
          <div class="collapse navbar-collapse justify-content-end col flex-fill px-0"><a href="#" class="btn btn-white ml-lg-3">Mon compte</a>
          </div>
        </div>
      </nav>
    </div>

    <section class="bg-primary text-light o-hidden">
      <div class="container">
        <div class="row align-items-center min-vh-50">
          <div class="col-lg-6 text-center text-lg-left mb-4 mb-lg-0">
            <h1 class="display-3"><span data-typed-text data-loop="true" data-type-speed="75" data-strings='["Recherchez vos documents.","Recherchez vos Objets.","Retrouvez vos documents perdus.","Retrouvez vos Objets perdus."]'></span></h1>
            <div class="my-4">
              
            </div>
          </div>
          <div class="col-lg-6 text-center" data-aos="fade-left">
            <img src="assets/img/saas-sketch-1.svg" alt="Image" class="min-vw-60">
          </div>
        </div>
        <div class="row mt-4">
          <div class="col">
            <div class="card card-body">
              <form class="row">
                <div class="col-lg">
                  <div class="form-group mb-md-0">
                    <select class="custom-select custom-select-lg">
                      <option selected>Type de l'objet</option>
                      <option value="1">CNI/Attestation/Passport</option>
                      <option value="2">Diplôme</option>
                      <option value="3">Objet</option>
                    </select>
                    <img class="icon" src="assets/img/icons/interface/arrow-caret.svg" alt="arrow-caret interface icon" data-inject-svg />
                  </div>
                </div>
                <div class="col-lg">
                  <div class="form-group mb-lg-0">
                    <input type="text" placeholder="Nom & Prénom(s)" class="form-control form-control-lg" />
                  </div>
                </div>
                <div class="col-lg-auto">
                  <button class="btn btn-lg btn-primary btn-block" type="submit">Rechercher</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <section class="pb-0">
      <div class="container">
        <div class="row mb-4">
          <div class="col">
            <h3 class="h1">Tous les Objets &amp; Documents</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-md-3">
            <a class="card hover-shadow-sm" href="#">
              <img src="assets/img/inner-4.jpg" alt="Image" class="card-img-top">
              <div class="card-body d-flex flex-column">
                <div class="d-flex">
                  <div class="ml">
                    <div class="badge badge-primary mb-2">Type document </div>
                    <h4 class="mb-2">Nom et prenoms</h4>
                    <div>Date du post, Pseudo poster, Contact </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-3">
            <a class="card hover-shadow-sm" href="#">
              <img src="assets/img/inner-9.jpg" alt="Image" class="card-img-top">
              <div class="card-body d-flex flex-column">
                <div class="d-flex">
                  <div class="text-right">
                    <div class="h4 mb-0 text-danger">02</div>
                    <div class="h4 mb-0 text-uppercase">JUL</div>
                  </div>
                  <div class="ml-3">
                    <div class="badge badge-primary mb-2">Workshop</div>
                    <h4 class="mb-2">Designer talk with Sam Randall</h4>
                    <div>148 Flockhart St, Collingwood VIC</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-3">
            <a class="card hover-shadow-sm" href="#">
              <img src="assets/img/inner-9.jpg" alt="Image" class="card-img-top">
              <div class="card-body d-flex flex-column">
                <div class="d-flex">
                  <div class="text-right">
                    <div class="h4 mb-0 text-danger">02</div>
                    <div class="h4 mb-0 text-uppercase">JUL</div>
                  </div>
                  <div class="ml-3">
                    <div class="badge badge-primary mb-2">Workshop</div>
                    <h4 class="mb-2">Designer talk with Sam Randall</h4>
                    <div>148 Flockhart St, Collingwood VIC</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-3">
            <a class="card hover-shadow-sm" href="#">
              <img src="assets/img/inner-9.jpg" alt="Image" class="card-img-top">
              <div class="card-body d-flex flex-column">
                <div class="d-flex">
                  <div class="text-right">
                    <div class="h4 mb-0 text-danger">02</div>
                    <div class="h4 mb-0 text-uppercase">JUL</div>
                  </div>
                  <div class="ml-3">
                    <div class="badge badge-primary mb-2">Workshop</div>
                    <h4 class="mb-2">Designer talk with Sam Randall</h4>
                    <div>148 Flockhart St, Collingwood VIC</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-3">
            <a class="card hover-shadow-sm" href="#">
              <img src="assets/img/inner-9.jpg" alt="Image" class="card-img-top">
              <div class="card-body d-flex flex-column">
                <div class="d-flex">
                  <div class="text-right">
                    <div class="h4 mb-0 text-danger">02</div>
                    <div class="h4 mb-0 text-uppercase">JUL</div>
                  </div>
                  <div class="ml-3">
                    <div class="badge badge-primary mb-2">Workshop</div>
                    <h4 class="mb-2">Designer talk with Sam Randall</h4>
                    <div>148 Flockhart St, Collingwood VIC</div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    
  
<?php include('includes/footer.php'); ?>