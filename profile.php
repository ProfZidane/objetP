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
    <title>Objet Perdu -- Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A corporate Bootstrap theme by Medium Rare">
    <style>
      @keyframes hideLoader{0%{ width: 100%; height: 100%; }100%{ width: 0; height: 0; }  }  body > div.loader{ position: fixed; background: white; width: 100%; height: 100%; z-index: 1071; opacity: 0; transition: opacity .5s ease; overflow: hidden; pointer-events: none; display: flex; align-items: center; justify-content: center;}body:not(.loaded) > div.loader{ opacity: 1;}body:not(.loaded){ overflow: hidden;}  body.loaded > div.loader{animation: hideLoader .5s linear .5s forwards;  } /* Typing Animation */.loading-animation {width: 6px;height: 6px;border-radius: 50%;animation: typing 1s linear infinite alternate;position: relative;left: -12px;}@keyframes typing {0% {background-color: rgba(100,100,100, 1);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 0.2);}25% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 2),24px 0px 0px 0px rgba(100,100,100, 0.2);}75% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 1);}}
    </style>
    <script type="text/javascript">
      window.addEventListener("load", function () {    document.querySelector('body').classList.add('loaded');  });
    </script>
    <link href="assets/css/theme-saas.min.css" rel="stylesheet" type="text/css" media="all" />
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
    
    <footer class="pb-4 bg-primary-3 text-light" id="footer">
      <div class="container">
        <div class="row mb-5">
          
        </div>
        <div class="row mb-5">
          <div class="col-6 col-lg-3 col-xl-2">
            <h5>Liens</h5>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a href="#" class="nav-link">Demos</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Pages</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Blog</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Portfolio</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Elements</a>
              </li>
            </ul>
          </div>
          <div class="col-6 col-lg">
            <h5>Contacts</h5>
            <ul class="list-unstyled">
              <li class="mb-3 d-flex">
                <img class="icon" src="assets/img/icons/theme/map/marker-1.svg" alt="marker-1 icon" data-inject-svg />
                <div class="ml-3">
                  <span>348 Greenpoint Avenue
                    <br />Brooklyn, NY</span>
                </div>
              </li>
              <li class="mb-3 d-flex">
                <img class="icon" src="assets/img/icons/theme/communication/call-1.svg" alt="call-1 icon" data-inject-svg />
                <div class="ml-3">
                  <span>+61 3928 3324</span>
                  <span class="d-block text-muted text-small">Mon - Fri 9am - 5pm</span>
                </div>
              </li>
              <li class="mb-3 d-flex">
                <img class="icon" src="assets/img/icons/theme/communication/mail.svg" alt="mail icon" data-inject-svg />
                <div class="ml-3">
                  <a href="#">hello@company.io</a>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-5 col-xl-4 mt-3 mt-lg-0">
            <h5>Subscribe</h5>
            <p>The latest Leap news, articles, and resources, sent straight to your inbox every month.</p>
            <form action="https://mailform.mediumra.re/leap/mailchimp.php" data-form-email novalidate>
              <div class="form-row">
                <div class="col-12">
                  <input type="email" class="form-control mb-2" placeholder="Email Address" name="email" required>
                </div>
                <div class="col-12">
                  <div class="d-none alert alert-success" role="alert" data-success-message>
                    Thanks, a member of our team will be in touch shortly.
                  </div>
                  <div class="d-none alert alert-danger" role="alert" data-error-message>
                    Please fill all fields correctly.
                  </div>
                  <div data-recaptcha data-sitekey="6Lemz4gUAAAAAElq4ZHFBzI7j8QUiYMn9I0mzQWG" data-size="invisible" data-badge="bottomleft">
                  </div>
                  <button type="submit" class="btn btn-primary btn-loading btn-block" data-loading-text="Sending">
                    <img class="icon" src="assets/img/icons/theme/code/loading.svg" alt="loading icon" data-inject-svg />
                    <span>Subscribe</span>
                  </button>
                </div>
              </div>
            </form>
            <small class="text-muted form-text">We’ll never share your details. See our <a href="#">Privacy Policy</a>
            </small>

          </div>
        </div>
        <div class="row justify-content-center mb-2">
          <div class="col-auto">
            <ul class="nav">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <img class="icon " src="assets/img/icons/social/instagram.svg" alt="instagram social icon" data-inject-svg />
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <img class="icon " src="assets/img/icons/social/twitter.svg" alt="twitter social icon" data-inject-svg />
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <img class="icon " src="assets/img/icons/social/youtube.svg" alt="youtube social icon" data-inject-svg />
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <img class="icon " src="assets/img/icons/social/medium.svg" alt="medium social icon" data-inject-svg />
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <img class="icon " src="assets/img/icons/social/facebook.svg" alt="facebook social icon" data-inject-svg />
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col col-md-auto text-center">
            <small class="text-muted">&copy;2021 This page is protected by reCAPTCHA and is subject to the Google <a href="https://www.google.com/policies/privacy/">Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service.</a>
            </small>
          </div>
        </div>
      </div>
    </footer>

    <a href="#" class="btn back-to-top btn-primary btn-round" data-smooth-scroll data-aos="fade-up" data-aos-offset="2000" data-aos-mirror="true" data-aos-once="false">
      <img class="icon" src="assets/img/icons/theme/navigation/arrow-up.svg" alt="arrow-up icon" data-inject-svg />
    </a>
    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

    <!-- 
             This appears in the demo only.  This script ensures our demo countdowns are always showing a date in the future 
             by altering the date before the countdown is initialized 
        -->
    <script type="text/javascript">
      (function($){
            var now             = new Date;
            var day             = 864e5;
            var weeksToAdd      = 2;
            var tenWeeksFromNow = new Date(+now + day * 7 * weeksToAdd).toISOString().slice(0,10).replace(/\-/g, 'index-2.html');
            $('[data-countdown-date].add-countdown-time').attr('data-countdown-date', tenWeeksFromNow);
          })(jQuery);
    </script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="assets/js/aos.js"></script>
    <!-- Clipboard (copies content from browser into OS clipboard) -->
    <script type="text/javascript" src="assets/js/clipboard.min.js"></script>
    <!-- Fancybox (handles image and video lightbox and galleries) -->
    <script type="text/javascript" src="assets/js/jquery.fancybox.min.js"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="assets/js/flatpickr.min.js"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="assets/js/flickity.pkgd.min.js"></script>
    <!-- Ion rangeSlider (flexible and pretty range slider elements) -->
    <script type="text/javascript" src="assets/js/ion.rangeSlider.min.js"></script>
    <!-- Isotope (masonry layouts and filtering) -->
    <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="assets/js/jarallax.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-video.min.js"></script>
    <script type="text/javascript" src="assets/js/jarallax-element.min.js"></script>
    <!-- jQuery Countdown (displays countdown text to a specified date) -->
    <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
    <!-- jQuery smartWizard facilitates steppable wizard content -->
    <script type="text/javascript" src="assets/js/jquery.smartWizard.min.js"></script>
    <!-- Plyr (unified player for Video, Audio, Vimeo and Youtube) -->
    <script type="text/javascript" src="assets/js/plyr.polyfilled.min.js"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="assets/js/prism.js"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="assets/js/scrollMonitor.js"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="assets/js/smooth-scroll.polyfills.min.js"></script>
    <!-- SVGInjector (replaces img tags with SVG code to allow easy inclusion of SVGs with the benefit of inheriting colors and styles)-->
    <script type="text/javascript" src="assets/js/svg-injector.umd.production.js"></script>
    <!-- TwitterFetcher (displays a feed of tweets from a specified account)-->
    <script type="text/javascript" src="assets/js/twitterFetcher_min.js"></script>
    <!-- Typed text (animated typing effect)-->
    <script type="text/javascript" src="assets/js/typed.min.js"></script>
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="assets/js/theme.js"></script>

    <script type="text/javascript" src="assets/js/script.js" ></script>

    <script type="text/javascript">
      // This script appears only in the demo - it disables forms with no action attribute to prevent 
      // navigating away from the page.
      jQuery("form:not([action])").on('submit', function(){return false;});
    </script>

  </body>


<!-- Mirrored from leap.mediumra.re/home-saas.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 09:27:06 GMT -->
</html>
